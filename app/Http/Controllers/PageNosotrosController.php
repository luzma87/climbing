<?php
    namespace App\Http\Controllers;

    use App\Foto;
    use Illuminate\Http\Request;


    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class PageNosotrosController extends Controller {

        public function index() {
            session(['pag' => 'nosotros']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.nosotros', ['fotosSlider' => $fotosSlider]);
        }

    }