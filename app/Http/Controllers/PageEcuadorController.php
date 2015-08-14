<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;


    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class PageEcuadorController extends Controller {

        public function index() {
            session(['pag' => 'ecuador']);
            if (!session('lang')) {
                session(['lang' => 'es']);
            }
            return view('pages.ecuador');
        }

    }