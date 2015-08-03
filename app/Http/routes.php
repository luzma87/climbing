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

    Route::get('/', 'HomeController@index');
    Route::get('auth/login', 'SessionsController@create');
    Route::get('login', 'SessionsController@create');
    Route::get('logout', 'SessionsController@destroy');

    Route::resource('auth', 'SessionsController');
    Route::resource('users', 'UsersController');
    Route::resource('frases', 'FrasesController');
    Route::resource('idiomas', 'IdiomasController');
    Route::resource('fotos', 'FotosController');

    Route::get('admin', 'AdminController@index');
    Route::get('inicio', 'AdminController@inicio');
    Route::get('ecuador', 'AdminController@ecuador');
    Route::get('programas', 'AdminController@programas');
    Route::get('recomendaciones', 'AdminController@recomendaciones');
    Route::get('noticias', 'AdminController@noticias');
    Route::get('comentarios', 'AdminController@comentarios');
    Route::get('galeria', 'AdminController@galeria');
    Route::get('config', 'AdminController@config');
    Route::get('cotizacion', 'AdminController@cotizacion');

//    Route::get('frases/{idioma}', array('uses' => 'FrasesController@index'));
//    Route::get('frases/create', array('uses' => 'FrasesController@create'));

    // Route group
    //    $router->group(['middleware' => 'auth'], function ($router) {
    //        // lots of routes that require auth middleware
    //        $router->resource('admin', 'AdminController');
    //        $router->resource('users', 'UsersController');
    //        $router->resource('idiomas', 'IdiomasController');
    //        $router->resource('fotos', 'FotosController');
    //    });

    // Auth With A Route Closure...
    //    Route::get('admin', ['middleware' => 'auth', function () {
    //        return 'Admin page';
    //    }]);

    // Auth With A Controller...
    //    Route::get('profile', ['middleware' => 'auth', 'uses' => 'ProfileController@show']);

    // Single route
    //    $router->get("/awesome/sauce", "AwesomeController@sauce", ['middleware' => 'auth']);
