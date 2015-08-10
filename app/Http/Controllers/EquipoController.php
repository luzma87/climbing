<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;


    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class EquipoController extends Controller {

        public function index() {
            session(['pag' => 'equipo']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            return view('pages.equipo');
        }

    }