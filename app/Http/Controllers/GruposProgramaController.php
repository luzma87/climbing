<?php

    namespace App\Http\Controllers;

    use App\Frase;
    use App\FraseGrupoPrograma;
    use App\GrupoPrograma;
    use App\Idioma;

    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    use Auth;
    use Input;
    use Illuminate\Support\Facades\Redirect;

    class GruposProgramaController extends Controller {
        protected $grupo;
        protected $rules;

        public function __construct(GrupoPrograma $grupo) {
            $this->middleware('auth');
            $this->grupo = $grupo;
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
                if ($size >= 2) {
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
            $idiomas = Idioma::all();
            return view('gruposPrograma.createAjax', ['idiomas' => $idiomas]);
        }

        /**
         * Show the ajax form for editing the specified resource.
         *
         * @return \Illuminate\View\View
         */
        public function editAjax() {
            $id = Input::get("id");
            $grupo = $this->grupo->whereId($id)->get()->first();
            $idiomas = Idioma::all();
            return view('gruposPrograma.editAjax', ['grupo' => $grupo, 'idiomas' => $idiomas]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  Request $request
         *
         * @return Response
         */
        public function store(Request $request) {
            $input = Input::all();
            $data = $this->makeData($input);
            $grupo = GrupoPrograma::create();
            $grupo->orden = Input::get("orden");
            $grupo->save();
            foreach ($data as $lang => $inputs) {
                $idioma = Idioma::whereCodigo($lang)->get()->first();
                $inputs["grupo_programa_id"] = $grupo->id;
                $inputs["idioma"] = $idioma->id;
                FraseGrupoPrograma::create($inputs);
            }
            return Redirect::to('admin/programas')->with('message', 'Grupo de programas creado');
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
            $grupo = $this->grupo->whereId($id)->first();
            $input = Input::all();
            $data = $this->makeData($input);
            $grupo->frases()->delete();
            $grupo->orden = Input::get("orden");
            $grupo->save();
            foreach ($data as $lang => $inputs) {
                $idioma = Idioma::whereCodigo($lang)->get()->first();
                $inputs["grupo_programa_id"] = $grupo->id;
                $inputs["idioma"] = $idioma->id;
                FraseGrupoPrograma::create($inputs);
            }
            return Redirect::to('admin/programas')->with('message', 'Grupo de programas actualizado');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function destroy($id) {
            $grupo = $this->grupo->whereId($id)->first();
            $grupo->delete();

            return Redirect::to('admin/programas')->with('message', 'Grupo de programas eliminado');
        }
    }
