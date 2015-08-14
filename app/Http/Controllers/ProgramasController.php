<?php

    namespace App\Http\Controllers;

    use App\Frase;
    use App\FraseGrupoPrograma;
    use App\Programa;
    use App\GrupoPrograma;
    use App\Idioma;

    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    use Auth;
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
         * Show the ajax form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create($grupoId, $tipo) {
            $grupo = GrupoPrograma::whereId($grupoId)->get()->first();
            $nombre = $grupo->frases()->idioma("es")->first()->nombre;
            return view('programas.create', ["grupo" => $grupo, "nombre" => $nombre, "tipo" => $tipo]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  Request $request
         *
         * @return Response
         */
        public function store() {

        }
    }
