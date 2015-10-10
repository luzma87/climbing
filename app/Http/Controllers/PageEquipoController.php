<?php
namespace App\Http\Controllers;

use App\Foto;
use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageEquipoController extends Controller {

    public function index() {
        session(['pag' => 'equipo']);
        if (!session('lang')) {
            session(['lang' => 'es']);
        }

        $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
        return view('pages.equipo', ['fotosSlider' => $fotosSlider]);
    }

    public function guia($nombre) {
        session(['pag' => 'equipo']);
        if (!session('lang')) {
            session(['lang' => 'es']);
        }
        $fotosSlider = Foto::galeria("sliderPrincipal")->orderBy("id", "asc")->get();
        return view('pages.guia', ['nombre' => $nombre, 'fotosSlider' => $fotosSlider]);
    }
}