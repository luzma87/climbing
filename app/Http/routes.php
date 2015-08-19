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

    Route::resource('adminFotos', 'FotosController');
    Route::resource('adminFrases', 'FrasesController');
    Route::resource('adminFrasesFoto', 'FrasesFotoController');
    Route::resource('adminFrasesGrupoPrograma', 'FrasesGrupoProgramaController');
    Route::resource('adminFrasesPartePrograma', 'FrasesParteProgramaController');
    Route::resource('adminFrasesPrograma', 'FrasesProgramaController');
    Route::resource('adminFrasesTipoDificultad', 'FrasesTipoDificultadController');
    Route::resource('adminGruposPrograma', 'GruposProgramaController');
    Route::resource('adminIdiomas', 'IdiomasController');
    Route::resource('adminPartePrograma', 'PartesProgramasController');
    Route::resource('adminProgramas', 'ProgramasController');
    Route::resource('adminTiposDificultad', 'TiposDificultadController');
    Route::resource('auth', 'SessionsController');
    Route::resource('adminUsers', 'UsersController');

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
    Route::get('adminProgramas/create/{grupo}/{tipo}', 'ProgramasController@create');
    Route::get('adminProgramas/edit/{programa}/{idioma}', 'ProgramasController@edit');
    Route::get('adminProgramas/show/{programa}/{idioma}', 'ProgramasController@show');

    Route::get('admin/cotizacion', 'AdminController@cotizacion');


    Route::post('adminFrases/createAjax', 'FrasesController@createAjax');
    Route::post('adminFrases/editAjax', 'FrasesController@editAjax');

    Route::post('adminFotos/createAjax', 'FotosController@createAjax');

    Route::post('adminFrasesFoto/createAjax', 'FrasesFotoController@createAjax');
    Route::post('adminFrasesFoto/editAjax', 'FrasesFotoController@editAjax');

    Route::post('adminGruposPrograma/createAjax', 'GruposProgramaController@createAjax');
    Route::post('adminGruposPrograma/editAjax', 'GruposProgramaController@editAjax');

    Route::post('adminTiposDificultad/createAjax', 'TiposDificultadController@createAjax');
    Route::post('adminTiposDificultad/editAjax', 'TiposDificultadController@editAjax');

    Route::post('adminFrases/validarUniqueCodigoAjax', 'FrasesController@validarUniqueCodigoAjax');


    Route::get('/', 'PageHomeController@index');
    Route::get('home', 'PageHomeController@index');
    Route::get('nosotros', 'PageNosotrosController@index');
    Route::get('ecuador', 'PageEcuadorController@index');
    Route::get('equipo', 'PageEquipoController@index');
    Route::get('guias', 'PageEquipoController@index');
    Route::get('ignacio', 'PageEquipoController@ignacio');
    Route::get('romel', 'PageEquipoController@romel');
    Route::get('fabricio', 'PageEquipoController@fabricio');
    Route::get('robinsson', 'PageEquipoController@robinsson');
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
