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
            $input = array_except(Input::all(), '_method');
            $data = $this->makeData($input);
            $grupo->frases()->delete();
            foreach ($data as $lang => $inputs) {
                $idioma = Idioma::whereCodigo($lang)->get()->first();
                $inputs["grupo_programa_id"] = $grupo->id;
                $inputs["idioma"] = $idioma->id;
                FraseGrupoPrograma::create($inputs);
            }
            return Redirect::to('admin/programas')->with('message', 'Grupo de programas creado');

//            $this->rules = GrupoPrograma::$rules;
//            $this->validate($request, $this->rules);
//
//            $input = array_except(Input::all(), '_method');
//            $grupo->update($input);
//
//            return Redirect::ti('admin/programas')->with('message', 'Grupo de programas actualizado');
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
