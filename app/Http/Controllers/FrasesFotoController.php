<?php

    namespace App\Http\Controllers;

    use App\FraseFoto;
    use App\Foto;
    use App\Idioma;

    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    use Auth;
    use Input;
    use Illuminate\Support\Facades\Redirect;

    class FrasesFotoController extends Controller {
        protected $frase;
        protected $rules;

        public function __construct(FraseFoto $frase) {
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
                        ->where("titulo", "like", '%' . $search . '%')
                        ->orWhere("descripcion", "like", '%' . $search . '%')
                        ->orderBy("idioma", "asc")
                        ->get();
                } else {
                    $frases = $this->frase->where("id", ">", 0)->orderBy("idioma", "asc")->get();
                }
            } else {
                if ($search) {
                    $frases = app('db')->select("select * from frasesFoto where idioma = (select id from idiomas where codigo = ?) AND (titulo like ? or descripcion like ? ) ORDER BY idioma ASC ",
                                                array($idioma, '%' . $search . '%', '%' . $search . '%'));
                } else {
                    $frases = $this->frase->idioma($idioma)->orderBy("idioma", "asc")->get();
                }
            }
            $idiomas = Idioma::lists('nombre', 'codigo'); //saca solo el nombre y el id
            return view('frasesFoto.index', ['frases' => $frases, 'idiomas' => $idiomas, 'idioma' => $idioma, 'search' => $search]);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Response
         */
        public function create() {
//            $idiomas = Idioma::all();
            $idiomas = Idioma::lists('nombre', 'id'); //saca solo el nombre y el id
            return view('frasesFoto.create', ['idiomas' => $idiomas]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  Request $request
         *
         * @return Response
         */
        public function store(Request $request) {
            $this->rules = FraseFoto::$rules;
            $this->validate($request, $this->rules);

            $input = Input::all();
            FraseFoto::create($input);

            $redirectme = Input::get('redirectme');
            if ($redirectme && $redirectme != "") {
                return Redirect::to($redirectme)->with('message', 'Frase de foto creada');
            } else {
                return Redirect::route('frasesFoto.index')->with('message', 'Frase de foto creada');
            }
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
            return view('frasesFoto.show', ['frase' => $frase]);
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
            return view('frasesFoto.edit', ['frase' => $frase, 'idiomas' => $idiomas]);
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

            $this->rules = FraseFoto::$rules;
            $this->validate($request, $this->rules);

            $input = array_except(Input::all(), '_method');
            $frase->update($input);

            $redirectme = Input::get('redirectme');
            if ($redirectme && $redirectme != "") {
                return Redirect::to($redirectme)->with('message', 'Frase de foto actualizada');
            } else {
                return Redirect::route('frasesFoto.index')->with('message', 'Frase de foto actualizada');
            }
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

            return Redirect::route('frasesFoto.index')->with('message', 'Frase de foto eliminada.');
        }

        /**
         * Show the ajax form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function createAjax() {
            $lang = Input::get("lang");
            $redirectme = Input::get("redirectme");
            $idioma = Idioma::whereCodigo($lang)->get()->first();
            $foto = Input::get("foto");
            return view('frasesFoto.createAjax', ["idioma" => $idioma, "foto" => $foto, "redirectme" => $redirectme]);
        }

        /**
         * Show the ajax form for editing the specified resource.
         *
         * @return \Illuminate\View\View
         */
        public function editAjax() {
            $id = Input::get("id");
            $redirectme = Input::get("redirectme");
            $frase = $this->frase->whereId($id)->get()->first();
            return view('frasesFoto.editAjax', ['frase' => $frase, "redirectme" => $redirectme]);
        }
    }
