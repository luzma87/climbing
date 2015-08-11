<?php

    namespace App\Http\Controllers;

    use App\Frase;
    use App\Foto;
    use App\Idioma;
    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class AdminController extends Controller {

        public function __construct(Frase $frase) {
            $this->middleware('auth');
        }

        public function previewGaleria($galeria) {
            $fotos = Foto::galeria($galeria)->orderBy("id", "asc")->get();
            return view('admin.previewGaleria', ['fotos' => $fotos]);
        }

        public function index() {
            session(['pag' => 'admin']);
            Frase::idioma("es")->codigo("culturaAventura")->get();
            return view('admin.index');
        }

        public function slider() {
            session(['pag' => 'slider']);
            $fotos = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            $idiomas = Idioma::all();
            return view('admin.slider', ['fotos' => $fotos, 'idiomas' => $idiomas]);
        }

        public function home() {
            session(['pag' => 'home']);
            $idiomas = Idioma::all();
            $frases = Frase::pagina("home")->idioma("es")->orderBy("id", "asc")->get();
            $prct = (int)(100 / $idiomas->count());
            return view('admin.home', ['idiomas' => $idiomas, 'frases' => $frases, 'prct' => $prct]);
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
