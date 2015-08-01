@extends('layouts.defaultWeb')

@section('menuVert')
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
                <a href="{{ action('AdminController@index') }}" title="Administración"><i
                            class="fa-menu fa fa-th-large"></i><span class="toggle-menu">Administración</span></a>
            </li>
            <li class="menu-item {{ session('pag') == 'inicio' ? 'active' : 'non-active' }}">
                <a href="{{ URL::to('inicio') }}" title="Inicio"><i class="fa-menu fa fa-home"></i><span
                            class="toggle-menu">Inicio</span></a>
            </li>
            <li class="menu-item {{ session('pag') == 'ecuador' ? 'active' : 'non-active' }}">
                <a href="{{ URL::to('ecuador') }}" title="Ecuador país mega diverso"><i class="fa-menu fa fa-pagelines"></i><span
                            class="toggle-menu">Ecuador país mega diverso</span></a>
            </li>
            <li class="menu-item {{ session('pag') == 'programas' ? 'active' : 'non-active' }}">
                <a href="{{ URL::to('programas') }}" title="Nuestros programas"><i class="fa-menu fa fa-map"></i><span
                            class="toggle-menu">Nuestros programas</span></a>
            </li>
            <li class="menu-item {{ session('pag') == 'recomendaciones' ? 'active' : 'non-active' }}">
                <a href="{{ URL::to('recomendaciones') }}" title="Recomendaciones"><i class="fa-menu fa fa-weixin"></i><span
                            class="toggle-menu">Recomendaciones</span></a>
            </li>
            <li class="menu-item {{ session('pag') == 'noticias' ? 'active' : 'non-active' }}">
                <a href="{{ URL::to('noticias') }}" title="Noticias"><i class="fa-menu fa fa-newspaper-o"></i><span
                            class="toggle-menu">Noticias</span></a>
            </li>
            <li class="menu-item {{ session('pag') == 'comentarios' ? 'active' : 'non-active' }}">
                <a href="{{ URL::to('comentarios') }}" title="Comentarios"><i class="fa-menu fa fa-comments-o"></i><span
                            class="toggle-menu">Comentarios</span></a>
            </li>
            <li class="menu-item {{ session('pag') == 'galeria' ? 'active' : 'non-active' }}">
                <a href="{{ URL::to('galeria') }}" title="Galería"><i class="fa-menu fa fa-picture-o"></i><span
                            class="toggle-menu">Galería</span></a>
            </li>
            <li class="menu-item {{ session('pag') == 'cotizacion' ? 'active' : 'non-active' }}">
                <a href="{{ URL::to('cotizacion') }}" title="Cotización"><i class="fa-menu fa fa-money"></i><span
                            class="toggle-menu">Cotización</span></a>
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
@stop

@section('navbar')
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
@stop