<?php
namespace App\Http\Controllers;

use App\Foto;
use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageHomeController extends Controller {

    public function index() {
        session(['pag' => 'home']);
        if (!session('lang')) {
            session(['lang' => 'es']);
        }

        $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
        $fotosCarrousel = Foto::galeria("homePrincipal")->orderBy("id", "asc")->get();

        return view('pages.home', ['fotosSlider' => $fotosSlider, 'fotosCarrousel' => $fotosCarrousel]);
    }

}