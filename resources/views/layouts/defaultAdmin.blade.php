<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        {!! HTML::style('assets/bootstrap-3.3.5/css/bootstrap.min.css') !!}
        {!! HTML::style('assets/bootstrap-3.3.5/css/bootstrap-theme.min.css') !!}

        {!! HTML::style('assets/font-awesome-4.4.0/css/font-awesome.min.css') !!}

        {!! HTML::style('assets/js/jquery-ui-1.11.4/jquery-ui.min.css') !!}
        {!! HTML::style('assets/js/jquery-ui-1.11.4/jquery-ui.structure.min.css') !!}
        {!! HTML::style('assets/js/jquery-ui-1.11.4/jquery-ui.theme.min.css') !!}
        {!! HTML::style('assets/css/estilos.css') !!}
        {!! HTML::style('assets/css/custom.css') !!}
        {!! HTML::style('assets/css/botones.css') !!}
        {!! HTML::style('assets/css/tablas.css') !!}

        {!! HTML::script('assets/js/jquery-ui-1.11.4/external/jquery/jquery.js') !!}
        {!! HTML::script('assets/js/jquery-ui-1.11.4/jquery-ui.min.js') !!}
        {!! HTML::script('assets/bootstrap-3.3.5/js/bootstrap.min.js') !!}

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

        <title>@yield('title')</title>
        @yield('header')
    </head>
    <body>

        <div class='menu'>
            <ul class="nav menu-vertical">
                <li class="info-user toggle-menu">
                    <div class="circulo-logo" style="margin-left: 20px;margin-top: 22px">
                        <img class="imgBanner img-circle" src="{!!  URL::asset('assets/images/logo.PNG')  !!}" height="40px"/>
                    </div>
                    <div class="row fila">
                        <div class="col-md-11 col-md-offset-1">
                            <span style="font-weight: bold;color: #fff">{{ Auth::user()->name }}</span>
                        </div>
                    </div>
                    <div class="row fila">
                        <div class="col-md-11 col-md-offset-1">
                            <span>{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                </li>
                <li class="menu-item {{ session('pag') == 'admin' ? 'active' : 'non-active' }}">
                    <a href="{{ action('AdminController@index') }}" title="Administración">
                        <i class="fa-menu fa fa-th-large"></i><span class="toggle-menu">Administración</span>
                    </a>
                </li>
                <li class="menu-item {{ session('pag') == 'inicio' ? 'active' : 'non-active' }}">
                    <a href="{{ URL::to('inicio') }}" title="Inicio"><i class="fa-menu fa fa-home">
                        </i><span class="toggle-menu">Inicio</span>
                    </a>
                </li>
                <li class="menu-item {{ session('pag') == 'ecuador' ? 'active' : 'non-active' }}">
                    <a href="{{ URL::to('ecuador') }}" title="Ecuador país mega diverso">
                        <i class="fa-menu fa fa-pagelines"></i><span class="toggle-menu">Ecuador país mega diverso</span>
                    </a>
                </li>
                <li class="menu-item {{ session('pag') == 'programas' ? 'active' : 'non-active' }}">
                    <a href="{{ URL::to('programas') }}" title="Nuestros programas">
                        <i class="fa-menu fa fa-map"></i><span class="toggle-menu">Nuestros programas</span>
                    </a>
                </li>
                <li class="menu-item {{ session('pag') == 'recomendaciones' ? 'active' : 'non-active' }}">
                    <a href="{{ URL::to('recomendaciones') }}" title="Recomendaciones">
                        <i class="fa-menu fa fa-weixin"></i><span class="toggle-menu">Recomendaciones</span>
                    </a>
                </li>
                <li class="menu-item {{ session('pag') == 'noticias' ? 'active' : 'non-active' }}">
                    <a href="{{ URL::to('noticias') }}" title="Noticias">
                        <i class="fa-menu fa fa-newspaper-o"></i><span class="toggle-menu">Noticias</span>
                    </a>
                </li>
                <li class="menu-item {{ session('pag') == 'comentarios' ? 'active' : 'non-active' }}">
                    <a href="{{ URL::to('comentarios') }}" title="Comentarios">
                        <i class="fa-menu fa fa-comments-o"></i><span class="toggle-menu">Comentarios</span>
                    </a>
                </li>
                <li class="menu-item {{ session('pag') == 'galeria' ? 'active' : 'non-active' }}">
                    <a href="{{ URL::to('galeria') }}" title="Galería">
                        <i class="fa-menu fa fa-picture-o"></i><span class="toggle-menu">Galería</span>
                    </a>
                </li>
                <li class="menu-item {{ session('pag') == 'cotizacion' ? 'active' : 'non-active' }}">
                    <a href="{{ URL::to('cotizacion') }}" title="Cotización">
                        <i class="fa-menu fa fa-money"></i><span class="toggle-menu">Cotización</span>
                    </a>
                </li>
                {{--<li class="menu-item non-active dropdown">--}}
                {{--<a href="#" class="dropdown-toggle non-active " title="Chat"><i class="fa-menu fa fa-wechat"></i><span class="toggle-menu">Chat</span><span class="caret toggle-menu"></span></a>--}}
                {{--<ul class="submenu non-active" style="margin-top: 0">--}}
                {{--<li class="non-active"><a href="/zeus/chat/index"><i class="fa-menu fa fa-comments"></i>Comunitario</a>--}}
                {{--</li>--}}
                {{--<li class="non-active"><a href="/zeus/chatPolicia/index"><i class="fa-menu fa fa-comment"></i>Policías</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                <li class="menu-item non-active">
                    <a href="{{ URL::to('logout') }}" title="Salir">
                        <i class="fa-menu fa fa-sign-out"></i>
                        <span class="toggle-menu">Salir</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="container contenido">
            <nav class="default navbar">
                <div class="row">
                    <div class="col-md-1 col-xs-2 col-sm-1" style="width: 50px">
                        <a href="#" class="btn btn-verde " id="control-menu">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="col-md-9 titulo hidden-sm hidden-xs ">
                        @yield('title')
                    </div>
                    <div class="col-md-1 col-xs-2 col-sm-2 " style="margin-top: 10px">
                        <a href="{{ URL::to('logout') }}" class="item">
                            <i class="fa fa-sign-out"></i> Salir
                        </a>
                    </div>
                </div>
            </nav>

            @if (session('message')!='')
                <div class="flash alert-info">
                    <p>{{ session('message') }}</p>
                </div>
            @endif

            @yield('content')

            @yield('footer')

            <script type="text/javascript">
                var estadoMenu = 1;
                $("#control-menu").click(function () {
                    $(".toggle-menu").toggle();
                    if (estadoMenu == 1) {
                        $(".submenu").hide();
                        $(".menu").animate({
                            width : 55
                        });
                        $(".contenido").animate({
                            marginLeft : "55"
                        });
                        estadoMenu = 0;
                    } else {
                        $(".menu").animate({
                            width : 190
                        });
                        $(".contenido").animate({
                            marginLeft : "190"
                        });
                        estadoMenu = 1;
                    }
                    return false;
                });
                $(".dropdown-toggle").click(function () {
                    if (estadoMenu == 1) {
                        $(this).parent().find(".submenu").toggle();
                    } else {
                        $("#control-menu").click();
                        $(this).parent().find(".submenu").toggle()
                    }
                    return false;
                })
            </script>

            @yield('scripts')
        </div>
    </body>
</html>