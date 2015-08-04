<?php

    namespace App\Http\Controllers;

    use App\Idioma;
    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    use App\Frase;

    use Hash;
    use Auth;
    use Input;
    use Illuminate\Support\Facades\Redirect;

    class FrasesController extends Controller {
        protected $frase;
        protected $rules;

        public function __construct(Frase $frase) {
            $this->middleware('auth');
            $this->frase = $frase;
        }

        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index() {
            $idioma = Input::get("lang");
            $search = Input::get("search");
            if (!$idioma) {
                if ($search) {
                    $frases = $this->frase
                        ->where("codigo", "like", '%' . $search . '%')
                        ->orWhere("contenido", "like", '%' . $search . '%')
                        ->get();
                } else {
                    $frases = $this->frase->all();
                }
            } else {
                if ($search) {
//                    $frases = $this->frase
//                        ->idioma($idioma)
//                        ->where("codigo", "like", '%' . $search . '%')
//                        ->orWhere("contenido", "like", '%' . $search . '%')
//                        ->get();
//                    $frases = app('db')->select("select * from frases where idioma = (select id from idiomas where codigo = ?) and (codigo like '%?%' or contenido like '%?%')",
//                                                array($idioma, $search, $search));
                    $frases = app('db')->select("select * from frases where idioma = (select id from idiomas where codigo = ?) AND (codigo like ? or contenido like ?)",
                                                array($idioma, '%' . $search . '%', '%' . $search . '%'));
//                    dd($frases);
                } else {
                    $frases = $this->frase->idioma($idioma)->get();
                }
            }
            $idiomas = Idioma::lists('nombre', 'codigo'); //saca solo el nombre y el id
            return view('frases.index', ['frases' => $frases, 'idiomas' => $idiomas, 'idioma' => $idioma, 'search' => $search]);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Response
         */
        public function create() {
//            $idiomas = Idioma::all();
            $idiomas = Idioma::lists('nombre', 'id'); //saca solo el nombre y el id
            return view('frases.create', ['idiomas' => $idiomas]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  Request $request
         *
         * @return Response
         */
        public function store(Request $request) {
//            $this->frase->idioma = Input::get('idioma');
//            $this->frase->codigo = Input::get('codigo');
//            $this->frase->contenido = Input::get('contenido');
//            if (!$this->frase->isValid()) {
//                return Redirect::back()->withInput()->withErrors($this->frase->errors);
//            }
//            $this->frase->save();
//            return Redirect::route('frases.index');

            $this->rules = Frase::$rules;
            $this->validate($request, $this->rules);

            $input = Input::all();
            Frase::create($input);

            return Redirect::route('frases.index')->with('message', 'Frase creada');
        }

        /**
         * Display the specified resource.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function show($id) {
            $frase = $this->frase->whereId($id)->first();
            return view('frases.show', ['frase' => $frase]);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function edit($id) {
            $frase = $this->frase->whereId($id)->first();
            $idiomas = Idioma::lists('nombre', 'id'); //saca solo el nombre y el id
            return view('frases.edit', ['frase' => $frase, 'idiomas' => $idiomas]);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  Request $request
         * @param  int $id
         *
         * @return Response
         */
        public function update(Request $request, $id) {
            $frase = $this->frase->whereId($id)->first();

            $this->rules = Frase::$rules;
            $this->validate($request, $this->rules);

            $input = array_except(Input::all(), '_method');
            $frase->update($input);

            return Redirect::route('frases.index')->with('message', 'Frase actualizada.');

        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function destroy($id) {
            $frase = $this->frase->whereId($id)->first();
            $frase->delete();

            return Redirect::route('frases.index')->with('message', 'Frase eliminada.');
        }
    }
