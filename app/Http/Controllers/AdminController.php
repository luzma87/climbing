<?php

    namespace App\Http\Controllers;

    use App\Frase;
    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class AdminController extends Controller {

        public function __construct(Frase $frase) {
            $this->middleware('auth');
        }

        public function index() {
            session(['pag' => 'admin']);
            Frase::idioma("es")->codigo("culturaAventura")->get();
            return view('admin.index');
        }

        public function home() {
            session(['pag' => 'home']);
            return view('admin.home');
        }

        public function ecuador() {
            session(['pag' => 'ecuador']);
            return view('admin.ecuador');
        }

        public function programas() {
            session(['pag' => 'programas']);
            return view('admin.programas');
        }

        public function recomendaciones() {
            session(['pag' => 'recomendaciones']);
            return view('admin.recomendaciones');
        }

        public function noticias() {
            session(['pag' => 'noticias']);
            return view('admin.noticias');
        }

        public function comentarios() {
            session(['pag' => 'comentarios']);
            return view('admin.comentarios');
        }

        public function galeria() {
            session(['pag' => 'galeria']);
            return view('admin.galeria');
        }

        public function config() {
            session(['pag' => 'config']);
            return view('admin.config');
        }

        public function cotizacion() {
            session(['pag' => 'cotizacion']);
            return view('admin.cotizacion');
        }

    }
