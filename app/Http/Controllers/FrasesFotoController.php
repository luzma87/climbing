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
    }
