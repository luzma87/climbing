<?php
    namespace App\Http\Controllers;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class PageGaleriaController extends Controller {
        public function galeria() {
            session(['pag' => 'Galería']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            return view('pages.galeria');
        }
    }