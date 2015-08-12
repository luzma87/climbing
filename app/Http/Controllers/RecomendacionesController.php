<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecomendacionesController extends Controller {

    public function index() {
        session(['pag' => 'recomendaciones']);
        if (!session('lang')) {
            session(['lang' => 'es']);
        }
        return view('pages.recomendaciones');
    }


    public function reserva() {
        session(['pag' => 'recomendaciones']);
        if (!session('lang')) {
            session(['lang' => 'es']);
        }
        return view('pages.reserva');
    }
    public function cancelaciones() {
        session(['pag' => 'recomendaciones']);
        if (!session('lang')) {
            session(['lang' => 'es']);
        }
        return view('pages.cancelaciones');
    }
    public function entrega() {
        session(['pag' => 'recomendaciones']);
        if (!session('lang')) {
            session(['lang' => 'es']);
        }
        return view('pages.entrega');
    }

    public function responsabilidad() {
        session(['pag' => 'recomendaciones']);
        if (!session('lang')) {
            session(['lang' => 'es']);
        }
        return view('pages.responsabilidad');
    }

    public function equipoRecomendaciones() {
        session(['pag' => 'recomendaciones']);
        if (!session('lang')) {
            session(['lang' => 'es']);
        }
        return view('pages.equipoRecomendaciones');
    }


    public function quejas() {
        session(['pag' => 'recomendaciones']);
        if (!session('lang')) {
            session(['lang' => 'es']);
        }
        return view('pages.quejas');
    }


    public function general() {
        session(['pag' => 'recomendaciones']);
        if (!session('lang')) {
            session(['lang' => 'es']);
        }
        return view('pages.general');
    }

}