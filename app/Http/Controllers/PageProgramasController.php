<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;


    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class PageProgramasController extends Controller {

        public function index() {
            session(['pag' => 'programas']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            return view('pages.programas');
        }

        public function programa() {
            session(['pag' => 'programas']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            return view('pages.programa');
        }


        public function cursos() {
            session(['pag' => 'programas']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            return view('pages.cursos');
        }
        public function programaVariosDias() {
            session(['pag' => 'programas']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            return view('pages.programaVarios');
        }
    }

