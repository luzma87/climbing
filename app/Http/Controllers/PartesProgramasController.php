<?php

    namespace App\Http\Controllers;

    use App\Frase;
    use App\FraseGrupoPrograma;
    use App\FrasePartePrograma;
    use App\FrasePrograma;
    use App\PartePrograma;
    use App\Programa;
    use App\GrupoPrograma;
    use App\Idioma;

    use App\TipoDificultad;
    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    use Auth;
    use Illuminate\Support\Facades\File;
    use Input;
    use Illuminate\Support\Facades\Redirect;

    class PartesProgramasController extends Controller {
        protected $parte;
        protected $rules;

        public function __construct(PartePrograma $parte) {
            $this->middleware('auth');
            $this->parte = $parte;
        }

        /**
         * Sube un archivo de imagen al path correspondiente de la parte de programa y actualiza el path
         * @param $parte
         * @param $file
         */
        private function doUploadFoto($parte, $file) {
            $destinationPath = "assets/programas/" . $parte->programa->codigo . "/partes";
            $fileName = "";
            if ($file && $file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $fileName = "parte_" . $parte->orden . "_" . date("Ymd_His") . "." . $extension;
                $file->move($destinationPath, $fileName);
            }
            if ($fileName != "") {
                File::delete($parte->foto);
                $parte->foto = $destinationPath . "/" . $fileName;
                $parte->save();
            }
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
         * Show the ajax form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function createAjax() {
            $id = Input::get("id");
            $lang = Input::get("lang");
            $redirectme = Input::get("redirectme");
            return view('partesProgramas.createAjax', ["redirectme" => $redirectme]);
        }

        /**
         * Show the ajax form for editing the specified resource.
         *
         * @return \Illuminate\View\View
         */
        public function editAjax() {
            $id = Input::get("id");
            $redirectme = Input::get("redirectme");
            $parte = $this->parte->whereId($id)->get()->first();
            return view('partesProgramas.editAjax', ['parte' => $parte, "redirectme" => $redirectme]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  Request $request
         *
         * @return Response
         */
        public function store(Request $request) {
            $this->rules = PartePrograma::$rules;
//            dd(Input::all());
            $this->validate($request, $this->rules);
//            dd("2");

            $input = array_except(Input::all(), array('foto'));
            $data = $this->makeData($input);
            $parte = PartePrograma::create($input);

//            dd($parte);

            $file = $request->file('foto');
            $this->doUploadFoto($parte, $file);
//            dd($input);

            foreach ($data as $lang => $inputs) {
                $idioma = Idioma::whereCodigo($lang)->get()->first();
                $inputs["parte_programa_id"] = $parte->id;
                $inputs["idioma"] = $idioma->id;
//                dd($inputs);
                FrasePartePrograma::create($inputs);
            }

            $redirectme = Input::get('redirectme');
            return Redirect::to($redirectme)->with('message', 'Parte de programa creada');
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
            $parte = $this->parte->whereId($id)->first();

            $this->rules = PartePrograma::$rules;
            $this->validate($request, $this->rules);

            $input = array_except(Input::all(), array('foto'));
            $data = $this->makeData($input);

            $parte->update($input);
            $file = $request->file('foto');
            $this->doUploadFoto($parte, $file);

            foreach ($data as $lang => $inputs) {
                $idioma = Idioma::whereCodigo($lang)->get()->first();
                $frase = FrasePartePrograma::where("parte_programa_id", $parte->id)->where("idioma", $idioma->id)->first();
                if ($frase) {
                    $frase->update($inputs);
                } else {
                    $inputs["parte_programa_id"] = $parte->id;
                    $inputs["idioma"] = $idioma->id;
                    FrasePartePrograma::create($inputs);
                }
            }

            $redirectme = Input::get('redirectme');
            return Redirect::to($redirectme)->with('message', 'Parte de programa actualizada');
        }

    }