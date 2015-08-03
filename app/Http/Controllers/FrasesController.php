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
            $frases = $this->frase->idioma($idioma)->get();
            return view('frases.index', ['frases' => $frases]);
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
            $this->frase->idioma = Input::get('idioma');
            $this->frase->codigo = Input::get('codigo');
            $this->frase->contenido = Input::get('contenido');
            if (!$this->frase->isValid()) {
                return Redirect::back()->withInput()->withErrors($this->frase->errors);
            }
            $this->frase->save();
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
            //
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
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function destroy($id) {
            //
        }
    }
