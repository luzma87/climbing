<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        {!! HTML::script('assets/js/jquery-ui-1.11.4/external/jquery/jquery.js') !!}
        {!! HTML::script('assets/js/jquery-ui-1.11.4/jquery-ui.min.js') !!}
        {!! HTML::script('assets/bootstrap-3.3.5/js/bootstrap.min.js') !!}

        {!! HTML::script('assets/js/plugins/jquery-validation-1.14.0/dist/jquery.validate.min.js') !!}
        {!! HTML::script('assets/js/plugins/jquery-validation-1.14.0/dist/localization/messages_es.min.js') !!}

        {!! HTML::script('assets/js/plugins/bootbox-4.4.0/bootbox.js') !!}

        {!! HTML::script('assets/js/funciones.js') !!}

        {!! HTML::style('assets/bootstrap-3.3.5/css/bootstrap.min.css') !!}
        {!! HTML::style('assets/bootstrap-3.3.5/css/bootstrap-theme.min.css') !!}

        {!! HTML::style('assets/font-awesome-4.4.0/css/font-awesome.min.css') !!}

        {!! HTML::script('assets/js/plugins/jquery-qtip-2.2.1/jquery.qtip.min.js') !!}
        {!! HTML::style('assets/js/plugins/jquery-qtip-2.2.1/jquery.qtip.min.css') !!}

        {!! HTML::style('assets/js/jquery-ui-1.11.4/jquery-ui.min.css') !!}
        {!! HTML::style('assets/js/jquery-ui-1.11.4/jquery-ui.structure.min.css') !!}
        {!! HTML::style('assets/js/jquery-ui-1.11.4/jquery-ui.theme.min.css') !!}
        {!! HTML::style('assets/css/estilos.css') !!}
        {!! HTML::style('assets/css/custom.css') !!}
        {!! HTML::style('assets/css/botones.css') !!}
        {!! HTML::style('assets/css/tablas.css') !!}
        {!! HTML::style('assets/css/customAdmin.css') !!}

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
                {!! Form::nth_menu_li("Administración", URL::to('admin'), "fa-th-large", "admin") !!}
                {!! Form::nth_menu_li("Inicio", URL::to('admin/home'), "fa-home", "inicio") !!}
                {!! Form::nth_menu_li("Ecuador país mega diverso", URL::to('admin/ecuador'), "fa-pagelines", "ecuador") !!}
                {!! Form::nth_menu_li("Nuestros programas", URL::to('admin/programas'), "fa-map", "programas") !!}
                {!! Form::nth_menu_li("Recomendaciones", URL::to('admin/recomendaciones'), "fa-weixin", "recomendaciones") !!}
                {!! Form::nth_menu_li("Noticias", URL::to('admin/noticias'), "fa-newspaper-o", "noticias") !!}
                {!! Form::nth_menu_li("Comentarios", URL::to('admin/comentarios'), "fa-comments-o", "comentarios") !!}
                {!! Form::nth_menu_li("Galería", URL::to('admin/galeria'), "fa-picture-o", "galeria") !!}
                {!! Form::nth_menu_li("Recomendaciones", URL::to('admin/recomendaciones'), "fa-weixin", "recomendaciones") !!}
                {!! Form::nth_menu_li("Configuración", URL::to('admin/config'), "fa-cogs", "config") !!}
                <li class="menu-item {{ session('pag') == 'cotizacion' ? 'active' : 'non-active' }}">
                    <a href="{{ URL::to('admin/cotizacion') }}" title="Cotización">
                        <i class="fa-menu fa fa-money"></i><span class="toggle-menu">Cotización</span>
                    </a>
                </li>
                {!! Form::nth_menu_li("Salir", URL::to('logout'), "fa-sign-out", "logout") !!}
                {{--<li class="menu-item non-active dropdown">--}}
                {{--<a href="#" class="dropdown-toggle non-active " title="Chat"><i class="fa-menu fa fa-wechat"></i><span class="toggle-menu">Chat</span><span class="caret toggle-menu"></span></a>--}}
                {{--<ul class="submenu non-active" style="margin-top: 0">--}}
                {{--<li class="non-active"><a href="/zeus/chat/index"><i class="fa-menu fa fa-comments"></i>Comunitario</a>--}}
                {{--</li>--}}
                {{--<li class="non-active"><a href="/zeus/chatPolicia/index"><i class="fa-menu fa fa-comment"></i>Policías</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
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
                <div class="flash alert alert-info">
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
                });
                $('[title!=""]').qtip({
                    style    : {
                        classes : 'qtip-tipsy qtip-shadow'
                    },
                    position : {
                        my : 'left center',
                        at : 'right center'
                    }
                });
                $('.qtip-top').qtip({
                    style    : {
                        classes : 'qtip-tipsy qtip-shadow'
                    },
                    position : {
                        my : 'bottom center',
                        at : 'top center'
                    }
                });
            </script>

            @yield('scripts')
        </div>
    </body>
</html>