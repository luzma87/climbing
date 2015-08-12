<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class AdminController extends Controller {

        public function index() {
            session(['pag' => 'admin']);
            return view('admin.index');
        }

        public function inicio() {
            session(['pag' => 'inicio']);
            return view('admin.inicio');
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

        public function cotizacion() {
            session(['pag' => 'cotizacion']);
            return view('admin.cotizacion');
        }

    }