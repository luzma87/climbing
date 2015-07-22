<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        {!! HTML::style('assets/bootstrap-3.3.5/css/bootstrap.min.css') !!}
        {!! HTML::style('assets/bootstrap-3.3.5/css/bootstrap-theme.min.css') !!}

        {!! HTML::style('assets/font-awesome-4.3.0/css/font-awesome.min.css') !!}

        {!! HTML::style('assets/js/jquery-ui-1.11.4/jquery-ui.min.css') !!}
        {!! HTML::style('assets/js/jquery-ui-1.11.4/jquery-ui.structure.min.css') !!}
        {!! HTML::style('assets/js/jquery-ui-1.11.4/jquery-ui.theme.min.css') !!}
        {!! HTML::style('assets/css/estilos.css') !!}

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
        <div class="container">
            @yield('content')

            @yield('footer')

            {!! HTML::script('assets/js/jquery-ui-1.11.4/external/jquery/jquery.js') !!}
            {!! HTML::script('assets/js/jquery-ui-1.11.4/jquery-ui.min.js') !!}
            {!! HTML::script('assets/bootstrap-3.3.5/js/bootstrap.min.js') !!}

            @yield('scripts')
        </div>
    </body>
</html>