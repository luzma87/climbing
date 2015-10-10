<?php
    namespace App\Http\Controllers;

    use App\Foto;
    use Illuminate\Http\Request;


    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class PageProgramasController extends Controller {

        public function index() {
            session(['pag' => 'programas']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.programas', ['fotosSlider' => $fotosSlider]);
        }

        public function programa() {
            session(['pag' => 'programas']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.programa', ['fotosSlider' => $fotosSlider]);
        }


        public function cursos() {
            session(['pag' => 'programas']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.cursos', ['fotosSlider' => $fotosSlider]);
        }
        public function programaVariosDias() {
            session(['pag' => 'programas']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.programaVarios', ['fotosSlider' => $fotosSlider]);
        }
    }

