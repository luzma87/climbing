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

    Route::resource('fotos', 'FotosController');
    Route::resource('frases', 'FrasesController');
    Route::resource('frasesFoto', 'FrasesFotoController');
    Route::resource('frasesGrupoPrograma', 'FrasesGrupoProgramaController');
    Route::resource('frasesPartePrograma', 'FrasesParteProgramaController');
    Route::resource('frasesPrograma', 'FrasesProgramaController');
    Route::resource('frasesTipoDificultad', 'FrasesTipoDificultadController');
    Route::resource('gruposPrograma', 'GruposProgramaController');
    Route::resource('idiomas', 'IdiomasController');
    Route::resource('partePrograma', 'PartesProgramasController');
    Route::resource('programa', 'ProgramasController');
    Route::resource('tipoDificultad', 'TiposDificultadController');
    Route::resource('auth', 'SessionsController');
    Route::resource('users', 'UsersController');

    Route::get('admin', 'AdminController@index');
    Route::get('admin/slider', 'AdminController@slider');
    Route::get('admin/home', 'AdminController@home');
    Route::get('admin/ecuador', 'AdminController@ecuador');
    Route::get('admin/programas', 'AdminController@programas');
    Route::get('admin/recomendaciones', 'AdminController@recomendaciones');
    Route::get('admin/noticias', 'AdminController@noticias');
    Route::get('admin/comentarios', 'AdminController@comentarios');
    Route::get('admin/galeria', 'AdminController@galeria');
    Route::get('admin/config', 'AdminController@config');
    Route::get('admin/previewGaleria/{codigo}', 'AdminController@previewGaleria');

    Route::get('admin/cotizacion', 'AdminController@cotizacion');


    Route::post('frases/createAjax', 'FrasesController@createAjax');
    Route::post('frases/editAjax', 'FrasesController@editAjax');

    Route::post('fotos/createAjax', 'FotosController@createAjax');

    Route::post('frasesFoto/createAjax', 'FrasesFotoController@createAjax');
    Route::post('frasesFoto/editAjax', 'FrasesFotoController@editAjax');

    Route::post('gruposPrograma/createAjax', 'GruposProgramaController@createAjax');
    Route::post('gruposPrograma/editAjax', 'GruposProgramaController@editAjax');

    Route::post('frases/validarUniqueCodigoAjax', 'FrasesController@validarUniqueCodigoAjax');


    Route::get('/', 'HomeController@index');
    Route::get('home', 'HomeController@index');
    Route::get('nosotros', 'NosotrosController@index');
    Route::get('ecuador', 'EcuadorController@index');
    Route::get('equipo', 'EquipoController@index');
    Route::get('ignacio', 'EquipoController@ignacio');
    Route::get('romel', 'EquipoController@romel');
    Route::get('fabricio', 'EquipoController@fabricio');
    Route::get('robisson', 'EquipoController@robisson');
    Route::get('nicolas', 'EquipoController@nicolas');
    Route::get('programas', 'ProgramasController@index');
    Route::get('programa', 'ProgramasController@programa');
    Route::get('recomendaciones', 'ProgramasController@index');
    Route::get('reserva', 'ProgramasController@reserva');
    Route::get('entrega', 'ProgramasController@entrega');
    Route::get('responsabilidad', 'ProgramasController@responsabilidad');
    Route::get('equipoRecomendaciones', 'ProgramasController@equipoRecomendaciones');
    Route::get('quejas', 'ProgramasController@quejas');
    Route::get('general', 'ProgramasController@general');

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
