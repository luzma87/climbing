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
    Route::resource('programas', 'ProgramasController');
    Route::resource('tiposDificultad', 'TiposDificultadController');
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
    Route::get('programas/create/{programa}/{tipo}', 'ProgramasController@create');

    Route::get('admin/cotizacion', 'AdminController@cotizacion');


    Route::post('frases/createAjax', 'FrasesController@createAjax');
    Route::post('frases/editAjax', 'FrasesController@editAjax');

    Route::post('fotos/createAjax', 'FotosController@createAjax');

    Route::post('frasesFoto/createAjax', 'FrasesFotoController@createAjax');
    Route::post('frasesFoto/editAjax', 'FrasesFotoController@editAjax');

    Route::post('gruposPrograma/createAjax', 'GruposProgramaController@createAjax');
    Route::post('gruposPrograma/editAjax', 'GruposProgramaController@editAjax');

    Route::post('tiposDificultad/createAjax', 'TiposDificultadController@createAjax');
    Route::post('tiposDificultad/editAjax', 'TiposDificultadController@editAjax');

    Route::post('frases/validarUniqueCodigoAjax', 'FrasesController@validarUniqueCodigoAjax');


    Route::get('/', 'PageHomeController@index');
    Route::get('home', 'PageHomeController@index');
    Route::get('nosotros', 'PageNosotrosController@index');
    Route::get('ecuador', 'PageEcuadorController@index');
    Route::get('equipo', 'PageEquipoController@index');
    Route::get('guias', 'PageEquipoController@index');
    Route::get('ignacio', 'PageEquipoController@ignacio');
    Route::get('romel', 'PageEquipoController@romel');
    Route::get('fabricio', 'PageEquipoController@fabricio');
    Route::get('robinsson', 'PageEquipoController@robisson');
    Route::get('nicolas', 'PageEquipoController@nicolas');
    Route::get('programas', 'PageProgramasController@index');
    Route::get('programa', 'PageProgramasController@programa');
    Route::get('recomendaciones', 'PageRecomendacionesController@index');
    Route::get('reserva', 'PageRecomendacionesController@reserva');
    Route::get('entrega', 'PageRecomendacionesController@entrega');
    Route::get('responsabilidad', 'PageRecomendacionesController@responsabilidad');
    Route::get('equipoRecomendaciones', 'PageRecomendacionesController@equipoRecomendaciones');
    Route::get('quejas', 'PageRecomendacionesController@quejas');
    Route::get('general', 'PageRecomendacionesController@general');

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
