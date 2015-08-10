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


Route::get('auth/login', 'SessionsController@create');
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::resource('auth', 'SessionsController');
Route::resource('users', 'UsersController');
Route::resource('frases', 'FrasesController');
Route::resource('idiomas', 'IdiomasController');
Route::resource('fotos', 'FotosController');
Route::resource('frasesFoto', 'FrasesFotoController');

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('nosotros', 'NosotrosController@index');
Route::get('ecuador', 'EcuadorController@index');
Route::get('equipo', 'EquipoController@index');

Route::get('admin', 'AdminController@index');
Route::get('admin/home', 'AdminController@home');
Route::get('admin/ecuador', 'AdminController@ecuador');
Route::get('admin/programas', 'AdminController@programas');
Route::get('admin/recomendaciones', 'AdminController@recomendaciones');
Route::get('admin/noticias', 'AdminController@noticias');
Route::get('admin/comentarios', 'AdminController@comentarios');
Route::get('admin/galeria', 'AdminController@galeria');
Route::get('admin/config', 'AdminController@config');
Route::get('admin/cotizacion', 'AdminController@cotizacion');
Route::post('admin/createFraseAjax', 'FrasesController@createAjax');
Route::post('admin/editFraseAjax', 'FrasesController@editAjax');

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
