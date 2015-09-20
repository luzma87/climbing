<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>
<div class="top col-xs-12 col-md-12 col-lg-12"></div>
<div class="banner col-xs-12 col-md-12 col-lg-12">
    <img class="imgBanner" src="{!!  URL::asset('assets/images/montana2.jpg')  !!}" style="margin: 0px"/>

    <div class="menu-container">
        <div class="row upper-row">

            <div class="logo col-xs-3 col-md-2 col-sm-3 col-lg-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                <img class="imgBanner" src="{!!  URL::asset('assets/images/logo.PNG')  !!}" style="width: 100%;margin: 0px"/>
            </div>

            <div class="col-lg-7 col-md-6 col-sm-7 col-xs-3 menu-horizontal col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-2">
                <a href="{{URL::to('home')}}" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2  col-xs-12 ui-corner-all {{ session('pag') === 'home' ? 'active' : '' }}">
                    {!! getFrase("menu_home",session("lang"), "Inicio") !!}
                </a>
                <a href="{{URL::to('nosotros')}}" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2 col-xs-12 ui-corner-all {{ session('pag') === 'nosotros' ? 'active' : '' }}">
                    {!! getFrase("menu_nosotros",session("lang"), "Nosotros") !!}
                </a>
                <a href="{{URL::to('guias')}}" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2 col-xs-12 ui-corner-all {{ session('pag') === 'guias' ? 'active' : '' }}">
                    {!! getFrase("menu_guias",session("lang"), "Guías") !!}
                </a>
                <a href="{{URL::to('contacto')}}" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2 col-xs-12 ui-corner-all {{ session('pag') === 'contacto' ? 'active' : '' }}">
                    {!! getFrase("menu_contacto",session("lang"), "Contacto") !!}
                </a>
            </div>
        </div>
        <div class="row menu-vertical hidden-xs">
            <div class="col-lg-2 col-lg-offset-1 col-xs-3 col-md-2 col-sm-3 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 ">
                <nav class="navbar navbar-default navSvt" role="navigation" style="background: none;border: none">
                    <div class="container-fluid navSvt">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header navSvt hidden-lg">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand hidden-lg" href="#">Menú</a>
                        </div>

                    </div>
                    <div class="collapse navbar-collapse navSvt " id="bs-example-navbar-collapse-1">
                        <a href="{{URL::to('ecuador')}}" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
                            {!! getFrase("menu_ecuador",session("lang"), "Ecuador, país megadiverso") !!}
                        </a>
                        <a href="{{URL::to('programas')}}" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            {!! getFrase("menu_programas",session("lang"), "Nuestros programas") !!}
                        </a>
                        <a href="{{URL::to('recomendaciones')}}" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            {!! getFrase("menu_recomendaciones",session("lang"), "Recomendaciones") !!}
                        </a>
                        <a href="{{URL::to('reserva')}}" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            {!! getFrase("menu_condiciones",session("lang"), "Términos y Condiciones") !!}
                        </a>
                        <a href="{{URL::to('galeria')}}" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            {!! getFrase("menu_galeria",session("lang"), "Galería") !!}
                        </a>
                    </div>
                </nav>

            </div>
        </div>
    </div>
    <div class="row info-row hidden-xs ">
        <div id="slider-text" class="col-lg-7 col-md-7 col-sm-7 col-xs-10  col-lg-offset-1  col-md-offset-1 col-sm-offset-1 col-xs-offset-1 info-text">
            Cumbre Illiniza Sur 5248 msnm, Ciudad Encantada
        </div>
        <div class="col-lg-3 col-md-3  col-sm-3  hidden-xs  info-icos">
            <img src="{!!  URL::asset('assets/images/iconos.PNG')  !!}" style="height: 90%">
        </div>
    </div>

</div>