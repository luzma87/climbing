<?php

    namespace App\Http\Controllers;

    use App\Frase;
    use App\FraseGrupoPrograma;
    use App\FrasePrograma;
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

    class ProgramasController extends Controller {
        protected $programa;
        protected $rules;

        public function __construct(Programa $programa) {
            $this->middleware('auth');
            $this->programa = $programa;
        }

        /**
         * Sube un archivo de imagen al path correspondiente del programa y actualiza el path
         * @param $programa
         * @param $file
         */
        private function doUploadFoto($programa, $file) {
            $destinationPath = "assets/programas/" . $programa->codigo;
            $fileName = "";
            if ($file && $file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $fileName = $programa->codigo . "_" . date("Ymd_His") . "." . $extension;
                $file->move($destinationPath, $fileName);
            }
            if ($fileName != "") {
                $programa->foto = $destinationPath . "/" . $fileName;
                $programa->save();
            }
        }

        /**
         * Sube un archivo pdf al path correspondiente de la frase programa y actualiza el path
         * @param $programa
         * @param $frase
         * @param $file
         */
        private function doUploadPdf($programa, $frase, $file) {
            $destinationPath = "assets/programas/" . $programa->codigo . "/pdf";
            $fileName = "";
            if ($file && $file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $fileName = $programa->codigo . "_" . date("Ymd_His") . "." . $extension;
                $file->move($destinationPath, $fileName);
            }
            if ($fileName != "") {
                $frase->llevarFile = $destinationPath . "/" . $fileName;
                $frase->save();
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
         * @param $grupoId
         * @param $tipo
         * @return \Illuminate\View\View
         */
        public function create($grupoId, $tipo) {
            $grupo = GrupoPrograma::whereId($grupoId)->get()->first();
            $nombre = $grupo->frases()->idioma("es")->first()->nombre;
            $tipos = TipoDificultad::all()->sortBy('orden');

            $arrTipos = array();

            foreach ($tipos as $tp) {
                $fr = $tp->frases()->idioma("es")->get()->first();
                $arrTipos["" . $tp->id] = $fr->codigo . " - " . $fr->descripcion;
            }

            $programas = Programa::all();
            $recomendaciones = array();
            foreach ($programas as $programa) {
                $fr = $programa->frases()->idioma("es")->get()->first();
                $recomendaciones["" . $programa->id] = $fr->nombre;
            }
            return view('programas.create', ["grupo" => $grupo, "nombre" => $nombre, "tipo" => $tipo, "tipos" => $arrTipos, "recomendaciones" => $recomendaciones]);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         * @return Response
         */
        public function edit($id, $lang) {
            $programa = Programa::whereId($id)->get()->first();
            $grupo = $programa->grupoPrograma;
            $nombre = $grupo->frases()->idioma("es")->first()->nombre;
            $tipos = TipoDificultad::all()->sortBy('orden');

            $arrTipos = array();

            foreach ($tipos as $tp) {
                $fr = $tp->frases()->idioma($lang)->get()->first();
                $arrTipos["" . $tp->id] = $fr->codigo . " - " . $fr->descripcion;
            }

            $programas = Programa::all();
            $recomendaciones = array();
            foreach ($programas as $prg) {
                if ($prg->id != $programa->id) {
                    $fr = $prg->frases()->idioma($lang)->get()->first();
                    $recomendaciones["" . $prg->id] = $fr->nombre;
                }
            }
            return view('programas.edit', ["programa" => $programa, "grupo" => $grupo, "nombre" => $nombre, "tipos" => $arrTipos, "recomendaciones" => $recomendaciones, "lang" => $lang]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  Request $request
         *
         * @return Response
         */
        public function store(Request $request) {
            $this->rules = Programa::$rules;
            $this->validate($request, $this->rules);

            $input = array_except(Input::all(), array('foto'));
            $data = $this->makeData($input);

            $programa = Programa::create($input);
            $file = $request->file('foto');
            $this->doUploadFoto($programa, $file);

            foreach ($data as $lang => $inputs) {
                $idioma = Idioma::whereCodigo($lang)->get()->first();
                $inputs["programa_id"] = $programa->id;
                $inputs["idioma"] = $idioma->id;
                $frase = FrasePrograma::create($inputs);
                $pdf = $request->file('llevarFile__' . $lang);
                $this->doUploadPdf($programa, $frase, $pdf);
            }

            return Redirect::to('admin/programas')->with('message', 'Programa creado');
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  Request $request
         * @param  int $id
         * @return Response
         */
        public function update(Request $request, $id) {
//            $programa = $this->programa->whereId($id)->first();
//            $this->rules = Programa::$rules;
//            $this->validate($request, $this->rules);
//
//            $input = array_except(Input::all(), array('foto'));
//            $data = $this->makeData($input);
//
//            $programa->update($input);
//            File::delete($programa->foto);
//            $file = $request->file('foto');
//            $this->doUploadFoto($programa, $file);
//
//            foreach ($data as $lang => $inputs) {
//                $idioma = Idioma::whereCodigo($lang)->get()->first();
//                $inputs["programa_id"] = $programa->id;
//                $inputs["idioma"] = $idioma->id;
//                $frase = FrasePrograma::create($inputs);
//                $pdf = $request->file('llevarFile__' . $lang);
//                $this->doUploadPdf($programa, $frase, $pdf);
//            }
//
//            return Redirect::to('admin/programas')->with('message', 'Programa creado');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function destroy($id) {
            $programa = $this->programa->whereId($id)->first();
            $programa->delete();

            return Redirect::to('admin/programas')->with('message', 'Programa eliminado');
        }
    }
