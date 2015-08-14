<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;


    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class PageNosotrosController extends Controller {

        public function index() {
            session(['pag' => 'nosotros']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            return view('pages.nosotros');
        }

    }