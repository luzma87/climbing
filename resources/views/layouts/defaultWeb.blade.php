<!DOCTYPE html>
<html>

    <head>
        <?php
        use App\Frase;
        use App\Foto;
        use App\Idioma;

        ?>

        <meta charset="utf-8">

        {!! HTML::style('assets/bootstrap-3.3.5/css/bootstrap.min.css') !!}
        {!! HTML::style('assets/bootstrap-3.3.5/css/bootstrap-theme.min.css') !!}

        {!! HTML::style('assets/font-awesome-4.4.0/css/font-awesome.min.css') !!}

        {!! HTML::style('assets/js/jquery-ui-1.11.4/jquery-ui.min.css') !!}
        {!! HTML::style('assets/js/jquery-ui-1.11.4/jquery-ui.structure.min.css') !!}
        {!! HTML::style('assets/js/jquery-ui-1.11.4/jquery-ui.theme.min.css') !!}
        {!! HTML::style('assets/css/estilos.css') !!}
        {!! HTML::style('assets/css/custom.css') !!}

        {!! HTML::script('assets/js/jquery-ui-1.11.4/external/jquery/jquery.js') !!}
        {!! HTML::script('assets/js/jquery-ui-1.11.4/jquery-ui.min.js') !!}
        {!! HTML::script('assets/bootstrap-3.3.5/js/bootstrap.min.js') !!}

        {!! HTML::style('assets/css/botones.css') !!}
        {!! HTML::style('assets/css/tablas.css') !!}

        <link rel="apple-touch-icon" sizes="57x57" href="{!! URL::asset('assets/images/favicons/apple-touch-icon-57x57.png')  !!}">
        <link rel="apple-touch-icon" sizes="114x114" href="{!! URL::asset('assets/images/favicons/apple-touch-icon-114x114.png')  !!}">
        <link rel="apple-touch-icon" sizes="72x72" href="{!! URL::asset('assets/images/favicons/apple-touch-icon-72x72.png')  !!}">
        <link rel="apple-touch-icon" sizes="144x144" href="{!! URL::asset('assets/images/favicons/apple-touch-icon-144x144.png')  !!}">
        <link rel="apple-touch-icon" sizes="60x60" href="{!! URL::asset('assets/images/favicons/apple-touch-icon-60x60.png')  !!}">
        <link rel="apple-touch-icon" sizes="120x120" href="{!! URL::asset('assets/images/favicons/apple-touch-icon-120x120.png')  !!}">
        <link rel="apple-touch-icon" sizes="76x76" href="{!! URL::asset('assets/images/favicons/apple-touch-icon-76x76.png')  !!}">
        <link rel="apple-touch-icon" sizes="152x152" href="{!! URL::asset('assets/images/favicons/apple-touch-icon-152x152.png')  !!}">
        <link rel="apple-touch-icon" sizes="180x180" href="{!! URL::asset('assets/images/favicons/apple-touch-icon-180x180.png')  !!}">
        <meta name="apple-mobile-web-app-title" content="Yes Climbing Guides">
        <link rel="icon" type="image/png" href="{!! URL::asset('assets/images/favicons/favicon-192x192.png" sizes="192x192')  !!}">
        <link rel="icon" type="image/png" href="{!! URL::asset('assets/images/favicons/favicon-160x160.png" sizes="160x160')  !!}">
        <link rel="icon" type="image/png" href="{!! URL::asset('assets/images/favicons/favicon-96x96.png" sizes="96x96')  !!}">
        <link rel="icon" type="image/png" href="{!! URL::asset('assets/images/favicons/favicon-16x16.png" sizes="16x16')  !!}">
        <link rel="icon" type="image/png" href="{!! URL::asset('assets/images/favicons/favicon-32x32.png" sizes="32x32')  !!}">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <meta name="application-name" content="Yes Climbing Guides">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        {!! HTML::script('assets/js/plugins/jssor/js/jssor.js') !!}
        {!! HTML::script('assets/js/plugins/jssor/js/jssor.slider.js') !!}

        <title>@yield('title')</title>
        @yield('header')

            <style type="text/css">
                div.slider_banner_container {
                    position : relative;
                    top      : 0;
                    left     : 0;
                    /*width    : 600px;*/
                    height   : 484px;
                }

                div.slider_carroussel_container {
                    position : relative;
                    margin   : 0 auto;
                    /*width    : 809px;*/
                    height   : 240px;
                    overflow : hidden;
                }

                div.loading {
                    position : absolute;
                    top      : 0;
                    left     : 0;
                }

                div.slider_banner_container div.slider_banner_slides {
                    cursor   : move;
                    position : absolute;
                    overflow : hidden;
                    left     : 0;
                    top      : 0;
                    /*width    : 600px;*/
                    height   : 484px;
                }

                div.slider_carroussel_container div.slider_carroussel_slides {
                    cursor   : move;
                    position : absolute;
                    left     : 0;
                    top      : 30px;
                    /*width    : 809px;*/
                    height   : 200px;
                    overflow : hidden;
                }

                div.slider_banner_slides div.slider_banner_caption {
                    position   : absolute;
                    bottom     : 10px;
                    left       : 5px;
                    background : white;
                    overflow   : hidden;
                    /*width       : 300px;*/
                    /*margin-left : 150px;*/
                    color      : #999;
                    padding    : 5px;
                }

                /*************************************************/
                /* jssor slider bullet navigator skin 01 css */
                /*
                .jssorb01 div           (normal)
                .jssorb01 div:hover     (normal mouseover)
                .jssorb01 .av           (active)
                .jssorb01 .av:hover     (active mouseover)
                .jssorb01 .dn           (mousedown)
                */
                .jssorb01 {
                    position : absolute;
                    z-index: 9999;
                }

                .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                    position              : absolute;
                    /* size of bullet elment */
                    width                 : 10px;
                    height                : 12px;
                    filter                : alpha(opacity=70);
                    opacity               : .7;
                    overflow              : hidden;
                    cursor                : pointer;
                    /*border                : #000 1px solid;*/

                    -webkit-border-radius : 2px;
                    -moz-border-radius    : 2px;
                    border-radius         : 2px;
                }

                .jssorb01 div {
                    background-color : #e8e8e8;
                }

                .jssorb01 div:hover, .jssorb01 .av:hover {
                    background-color : #d3d3d3;
                }

                .jssorb01 .av {
                    background-color : #324368;
                }

                .jssorb01 .dn, .jssorb01 .dn:hover {
                    background-color : #555555;
                }

                /* jssor slider arrow navigator skin 15 css */
                /*
                .jssora15l                  (normal)
                .jssora15r                  (normal)
                .jssora15l:hover            (normal mouseover)
                .jssora15r:hover            (normal mouseover)
                .jssora15l.jssora15ldn      (mousedown)
                .jssora15r.jssora15rdn      (mousedown)
                */
                .jssora15l, .jssora15r {
                    /*display  : block;*/
                    /*position : absolute;*/
                    /* size of arrow element */
                    /*width    : 20px;*/
                    /*height   : 38px;*/
                    cursor   : pointer;
                    overflow : hidden;
                    color    : #555;
                }

                .jssora15l:hover {
                    color : #999;
                }

                .jssora15r:hover {
                    color : #999;
                }

            </style>
    </head>
    <body>

        @yield('menuVert')

        <div class="container">
            @yield('navbar')

            @if (session('message')!='')
                <div class="flash alert-info">
                    <p>{{ session('message') }}</p>
                </div>
            @endif

            @yield('content')

            @yield('footer')

            <div class="row svt-footer">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                    <div class="row hidden-lg hidden-md hidden-sm" style="margin-bottom: 10px">
                        @foreach (Idioma::all() as $idioma)
                            <div class="col-xs-6 text-center">
                                <a href="" class="blanco {{ session('lang') === $idioma->codigo ? 'active' : '' }}">
                                    {{ $idioma->nombre}}
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="row hidden-xs">
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-lg-offset-1 col-md-offset-1  col-sm-offset-1 text-left">
                            <ul class="lista-idiomas">
                                <li>
                                    {{  Frase::codigo("footer_idiomas")->idioma(session("lang"))->get()->first()->contenido }}
                                </li>
                                @foreach (Idioma::all() as $idioma)
                                    <li class="{{ session('lang') === $idioma->codigo ? 'active' : '' }}">
                                        <a href="">{{ $idioma->nombre }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 col-lg-offset-3 col-md-offset-3  col-sm-offset-3 text-left">
                            <ul class="lista-idiomas">
                                <li class="{{ session('pag') === 'home' ? 'active' : '' }}">
                                    <a href="">
                                        {{  ucfirst(strtolower(Frase::codigo("menu_home")->idioma(session("lang"))->get()->first()->contenido)) }}
                                    </a>
                                </li>
                                <li class="{{ session('pag') === 'nosotros' ? 'active' : '' }}">
                                    <a href="">
                                        {{  ucfirst(strtolower(Frase::codigo("menu_nosotros")->idioma(session("lang"))->get()->first()->contenido)) }}
                                    </a>
                                </li>
                                <li class="{{ session('pag') === 'contacto' ? 'active' : '' }}">
                                    <a href="">
                                        {{  ucfirst(strtolower(Frase::codigo("menu_contacto")->idioma(session("lang"))->get()->first()->contenido)) }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2  text-left">
                            <ul class="lista-idiomas">
                                <li><a href="">Media montaña</a></li>
                                <li><a href="">Alta montaña</a></li>
                                <li><a href="">Cursos</a></li>
                                <li><a href="">Relax y descanso</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-1 col-sm-2 col-md-2 col-lg-2  text-left">
                            <ul class="lista-idiomas">
                                <li><a href="">Perú</a></li>
                                <li><a href="">Bolivia</a></li>
                                <li><a href="">Argentina</a></li>
                                <li><a href="">Galería</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row svt-final">
                <div class=" hidden-xs col-xs-4 col-sm-4 col-md-4 col-lg-4 col-lg-offset-1  col-md-offset-1  col-sm-offset-1">
                    {{  Frase::codigo("footer_copyright")->idioma(session("lang"))->get()->first()->contenido }}
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 text-center">
                    <a href="">
                        {{  Frase::codigo("footer_skype")->idioma(session("lang"))->get()->first()->contenido }}
                    </a>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 text-center">
                    <a href="">
                        {{  Frase::codigo("footer_twitter")->idioma(session("lang"))->get()->first()->contenido }}</a>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 text-center">
                    <a href="">
                        {{  Frase::codigo("footer_facebook")->idioma(session("lang"))->get()->first()->contenido }}</a>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center">
                    <a href="">
                        {{  Frase::codigo("menu_contacto")->idioma(session("lang"))->get()->first()->contenido }}
                    </a>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 text-center">
                    <a href="">
                    </a>
                </div>
            </div>
            @yield('scripts')
        </div>
    </body>
</html>