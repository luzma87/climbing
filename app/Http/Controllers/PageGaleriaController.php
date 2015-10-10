<?php
    namespace App\Http\Controllers;

    use App\Foto;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class PageGaleriaController extends Controller {
        public function galeria() {
            session(['pag' => 'Galería']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.galeria', ['fotosSlider' => $fotosSlider]);
        }
    }