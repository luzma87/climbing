<?php
    namespace App\Http\Controllers;

    use App\Foto;
    use Illuminate\Http\Request;


    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class PageRecomendacionesController extends Controller {

        public function index() {
            session(['pag' => 'recomendaciones']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.recomendaciones', ['fotosSlider' => $fotosSlider]);
        }


        public function reserva() {
            session(['pag' => 'condiciones']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.reserva', ['fotosSlider' => $fotosSlider]);
        }

        public function cancelaciones() {
            session(['pag' => 'condiciones']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.cancelaciones', ['fotosSlider' => $fotosSlider]);
        }

        public function entrega() {
            session(['pag' => 'condiciones']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.entrega', ['fotosSlider' => $fotosSlider]);
        }

        public function responsabilidad() {
            session(['pag' => 'condiciones']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.respoonsabilidad', ['fotosSlider' => $fotosSlider]);
        }

        public function equipoRecomendaciones() {
            session(['pag' => 'recomendaciones']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.equipoRecomendaciones', ['fotosSlider' => $fotosSlider]);
        }


        public function quejas() {
            session(['pag' => 'recomendaciones']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.quejas', ['fotosSlider' => $fotosSlider]);
        }


        public function general() {
            session(['pag' => 'recomendaciones']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.general', ['fotosSlider' => $fotosSlider]);
        }


    }