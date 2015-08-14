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

        public function create($grupoId, $tipo) {
            $grupo = GrupoPrograma::whereId($grupoId)->get()->first();
            return view('programas.create', ["grupo" => $grupo, "tipo" => $tipo]);
        }
    }
