<?php
    namespace App\Http\Controllers;

    use App\Foto;
    use Illuminate\Http\Request;


    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class PageEcuadorController extends Controller {

        public function index() {
            session(['pag' => 'ecuador']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }

            $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
            return view('pages.ecuador',['fotosSlider' => $fotosSlider]);
        }

    }