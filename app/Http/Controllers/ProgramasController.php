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
                File::delete($programa->foto);
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
                File::delete($frase->llevarFile);
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
            return view('programas.create', ["grupo" => $grupo, "nombre" => $nombre, "tipo" => $tipo, "tipos" => $arrTipos]);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param $codigo
         * @param $lang
         * @return Response
         */
        public function edit($codigo, $lang) {
            $programa = Programa::whereCodigo($codigo)->first();
            $grupo = $programa->grupoPrograma;
            $nombre = $grupo->frases()->idioma($lang)->first()->nombre;
            $tipos = TipoDificultad::all()->sortBy('orden');
            $frase = $programa->frases()->idioma($lang)->first();
            $fraseEs = null;
            if ($lang != "es") {
                $fraseEs = $programa->frases()->idioma("es")->first();
            }

            $arrTipos = array();

            $idiomas = Idioma::lists('nombre', 'codigo'); //saca solo el nombre y el id

            foreach ($tipos as $tp) {
                $fr = $tp->frases()->idioma($lang)->first();
                $arrTipos["" . $tp->id] = $fr->codigo . " - " . $fr->descripcion;
            }
            return view('programas.edit', ["programa" => $programa, "grupo" => $grupo, "nombre" => $nombre, "fraseEs" => $fraseEs,
                                           "tipos" => $arrTipos, "lang" => $lang, "frase" => $frase, "idiomas" => $idiomas]);
        }

        /**
         * Display the specified resource.
         *
         * @param $codigo
         * @param $lang
         * @return Response
         */
        public function show($codigo, $lang) {
            $programa = $this->programa->whereCodigo($codigo)->first();
            $grupo = $programa->grupoPrograma;
            $dif = $programa->tipoDificultad->frases()->idioma($lang)->first();
            $dificultad = $dif->codigo . ": " . $dif->descripcion;
            $nombre = $grupo->frases()->idioma($lang)->first()->nombre;
            $frase = $programa->frases()->idioma($lang)->first();
            $idiomas = Idioma::lists('nombre', 'codigo'); //saca solo el nombre y el id
            return view('programas.show', ['programa' => $programa, "grupo" => $grupo, "nombre" => $nombre, "dificultad" => $dificultad,
                                           'frase' => $frase, "idiomas" => $idiomas, "lang" => $lang]);
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
         * @param $codigo
         * @return Response
         */
        public function update(Request $request, $codigo) {
            $programa = $this->programa->whereCodigo($codigo)->first();
            $this->rules = Programa::$rules;
            $this->validate($request, $this->rules);

            $input = array_except(Input::all(), array('foto'));
            $data = $this->makeData($input);

            $programa->update($input);
            $file = $request->file('foto');
            $this->doUploadFoto($programa, $file);

            foreach ($data as $lang => $inputs) {
                $idioma = Idioma::whereCodigo($lang)->get()->first();
                $frase = FrasePrograma::where("programa_id", $programa->id)->where("idioma", $idioma->id)->first();
                if ($frase) {
                    $frase->update($inputs);
                } else {
                    $inputs["programa_id"] = $programa->id;
                    $inputs["idioma"] = $idioma->id;
                    $frase = FrasePrograma::create($inputs);
                }
                $pdf = $request->file('llevarFile__' . $lang);
                $this->doUploadPdf($programa, $frase, $pdf);
            }

            return Redirect::to('admin/programas')->with('message', 'Programa actualizado');
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

        public function editEtiquetas($tipo) {
            $idiomas = Idioma::all();
            $frases = Frase::pagina("programas_" . $tipo)->idioma("es")->orderBy("id", "asc")->get();
            $prct = (int)(100 / $idiomas->count());
            return view('programas.editEtiquetas', ["idiomas" => $idiomas, "frases" => $frases, "prct" => $prct, "tipo" => $tipo]);
        }
    }
