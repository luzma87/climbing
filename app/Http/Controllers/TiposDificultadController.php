<?php

    namespace App\Http\Controllers;

    use App\FraseTipoDificultad;
    use App\TipoDificultad;
    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    use App\Idioma;

    use Hash;
    use Auth;
    use Illuminate\Support\Facades\File;
    use Input;
    use Illuminate\Support\Facades\Redirect;

    class TiposDificultadController extends Controller {
        protected $tipo;
        protected $rules;

        public function __construct(TipoDificultad $tipo) {
            $this->middleware('auth');
            $this->tipo = $tipo;
        }

        /**
         * arregla los datos del input para poder crear los objetos
         * @param $input
         * @return array
         */
        private function makeData($input) {
            $data = array();
            foreach ($input as $key => $value) {
                $parts = explode("__", $key);
                $size = sizeof($parts);
                if ($size == 2) {
                    $campo = $parts[0];
                    $lang = $parts[1];
                    $data[$lang][$campo] = $value;
                }
            }
            return $data;
        }

        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index() {
            $tipos = $this->tipo->all()->sortBy('orden');
            $idiomas = Idioma::all();
            return view('tiposDificultad.index', ['tipos' => $tipos, 'idiomas' => $idiomas]);
        }


        /**
         * Show the ajax form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function createAjax() {
            $idiomas = Idioma::all();
            return view('tiposDificultad.createAjax', ["idiomas" => $idiomas]);
        }

        /**
         * Show the ajax form for editing the specified resource.
         *
         * @return \Illuminate\View\View
         */
        public function editAjax() {
            $id = Input::get("id");
            $idiomas = Idioma::all();
            $tipo = $this->tipo->whereId($id)->get()->first();
            return view('tiposDificultad.editAjax', ['tipo' => $tipo, "idiomas" => $idiomas]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  Request $request
         * @return Response
         */
        public function store(Request $request) {
            $input = Input::all();
            $data = $this->makeData($input);
            $tipo = TipoDificultad::create();
            $tipo->orden = Input::get('orden');
            $tipo->save();
            foreach ($data as $lang => $inputs) {
                $idioma = Idioma::whereCodigo($lang)->get()->first();
                $inputs["tipo_dificultad_id"] = $tipo->id;
                $inputs["idioma"] = $idioma->id;
                FraseTipoDificultad::create($inputs);
            }
            return Redirect::to('tiposDificultad')->with('message', 'Tipo de dificultad creado');
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  Request $request
         * @param  int $id
         * @return Response
         */
        public function update(Request $request, $id) {
            $tipo = $this->tipo->whereId($id)->first();
            $input = Input::all();
            $data = $this->makeData($input);
            $tipo->frases()->delete();
            $tipo->orden = Input::get('orden');
            $tipo->save();
            foreach ($data as $lang => $inputs) {
                $idioma = Idioma::whereCodigo($lang)->get()->first();
                $inputs["tipo_dificultad_id"] = $tipo->id;
                $inputs["idioma"] = $idioma->id;
                FraseTipoDificultad::create($inputs);
            }
            return Redirect::to('tiposDificultad')->with('message', 'Tipo de dificultad actualizado');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         * @return Response
         */
        public function destroy($id) {
            $tipo = $this->tipo->whereId($id)->first();
            $tipo->delete();

            return Redirect::route('tiposDificultad.index')->with('message', 'Tipo de dificultad eliminado.');
        }
    }
