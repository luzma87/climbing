<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    use Auth;
    use Input;
    use Illuminate\Support\Facades\Redirect;

    class SessionsController extends Controller {

        public function create() {
//        if(Auth::guest()) { //NO logueado
            if (Auth::check()) { //logueado
                return Redirect::to('/admin');
            }
            return view('sessions.create');
        }

        public function store() {
            if (Auth::attempt(Input::only('email', 'password'))) {
//            $email = Input::get('email');
//            $password = ;
//            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return Redirect::to('/admin');
            }
            return Redirect::back()->withInput()->with('error', 'No se encontró el nombre de usuario o contraseña')->with('email', Input::get('email'));
        }

        public function destroy() {
            Auth::logout();
            return Redirect::route('auth.create');
        }
    }
