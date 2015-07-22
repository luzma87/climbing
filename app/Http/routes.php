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

    // Route group
    $router->group(['middleware' => 'auth'], function ($router) {
        // lots of routes that require auth middleware
        $router->get('admin', 'AdminController@index');
        $router->resource('users', 'UsersController');
        $router->resource('users', 'UsersController');
        $router->resource('idiomas', 'IdiomasController');
        $router->resource('frases', 'FrasesController');
        $router->resource('fotos', 'FotosController');
    });

    // Auth With A Route Closure...
    //    Route::get('admin', ['middleware' => 'auth', function () {
    //        return 'Admin page';
    //    }]);

    // Auth With A Controller...
    //    Route::get('profile', ['middleware' => 'auth', 'uses' => 'ProfileController@show']);

    // Single route
    //    $router->get("/awesome/sauce", "AwesomeController@sauce", ['middleware' => 'auth']);
