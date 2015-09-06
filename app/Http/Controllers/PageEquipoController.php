<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;


    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class PageEquipoController extends Controller {

        public function index() {
            session(['pag' => 'equipo']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            return view('pages.equipo');
        }


        public function ignacio() {
            session(['pag' => 'equipo']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            return view('pages.ignacio');
        }


        public function romel() {
            session(['pag' => 'equipo']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            return view('pages.romel');
        }


        public function nicolas() {
            session(['pag' => 'equipo']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            return view('pages.nicolas');
        }

        public function robinsson() {
            session(['pag' => 'equipo']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            return view('pages.robinsson');
        }

        public function fabricio() {
            session(['pag' => 'equipo']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            return view('pages.fabricio');
        }


    }