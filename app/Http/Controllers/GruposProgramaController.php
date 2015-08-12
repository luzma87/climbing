<?php

    namespace App\Http\Controllers;

    use App\Frase;
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
            return view('gruposPrograma.editAjax', ['grupo' => $grupo]);
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
            GrupoPrograma::create($input);

            return Redirect::route('admin/programas')->with('message', 'Grupo de programas creado');
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

            $this->rules = GrupoPrograma::$rules;
            $this->validate($request, $this->rules);

            $input = array_except(Input::all(), '_method');
            $grupo->update($input);

            return Redirect::route('admin/programas')->with('message', 'Grupo de programas actualizado');
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

            return Redirect::route('admin/programas')->with('message', 'Grupo de programas eliminado');
        }
    }
