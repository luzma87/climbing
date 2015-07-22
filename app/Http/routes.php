<?php

    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register all of the routes for an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the controller to call when that URI is requested.
    |
    */

    Route::get('/', function () {
        return View::make('enConstruccion');
    });


    Route::get('auth/login', 'SessionsController@create');
    Route::get('login', 'SessionsController@create');
    Route::get('logout', 'SessionsController@destroy');

    Route::resource('auth', 'SessionsController');

    Route::resource('users', 'UsersController');
    Route::resource('idiomas', 'IdiomasController');
    Route::resource('frases', 'FrasesController');
    Route::resource('fotos', 'FotosController');

    // With A Route Closure...

    Route::get('admin', ['middleware' => 'auth', function () {
        return 'Admin page';
    }]);

    // With A Controller...

    //    Route::get('profile', ['middleware' => 'auth', 'uses' => 'ProfileController@show']);

    //    Route::get('admin', function () {
    //        return 'Admin page';
    //    })->before('auth');