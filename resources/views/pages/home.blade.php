@extends('layouts.defaultWeb')

@section('title', 'Inicio')

@section('content')
    <div class="top col-xs-12 col-md-12 col-lg-12"></div>
    <div class="banner col-xs-12 col-md-12 col-lg-12">
        <img class="imgBanner" src="{!!  URL::asset('assets/images/montana2.jpg')  !!}" style="margin: 0px"/>

        <div class="menu-container">
            <div class="row upper-row">

                <div class="logo col-xs-3 col-md-2 col-sm-3 col-lg-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                    <img class="imgBanner" src="{!!  URL::asset('assets/images/logo.PNG')  !!}" style="width: 100%;margin: 0px"/>
                </div>

                <div class="col-lg-7 col-md-6 col-sm-7 col-xs-3 menu-horizontal col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-2">
                    <a href="#" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2  col-xs-12 ui-corner-all active">INICIO</a>
                    <a href="#" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2 col-xs-12 ui-corner-all">NOSOTROS</a>
                    <a href="#" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2 col-xs-12 ui-corner-all">GUÍAS</a>
                    <a href="#" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2 col-xs-12 ui-corner-all">CONTACTO</a>
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
                            <a href="#" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
                                ECUADOR PAÍS MEGA DIVERSO
                            </a>
                            <a href="#" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                NUESTROS PROGRAMAS
                            </a>
                            <a href="#" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                RECOMENDACIONES
                            </a>
                            <a href="#" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                TÉRMINOS Y CONDICIONES
                            </a>
                            <a href="#" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                GALERÍA
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

    <div class="row bottom-row">
        <div class="col-lg-3 col-xs-12  col-lg-offset-1 col-xs-offset-1 col-md-3  col-md-offset-1 col-sm-4  col-sm-offset-1 text-left " style="padding-left: 0px">
            Cultura y aventura
        </div>
        <div class="col-lg-6  col-lg-offset-1 col-md-6  col-md-offset-1 hidden-sm  hidden-xs text-right">
            Operadora Turística en Ecuador y Sud América
        </div>
    </div>
    <div class="row page-content">
        <div class="col-lg-2 col-lg-offset-4   col-md-2 col-md-offset-4 col-sm-2 col-sm-offset-4 col-xs-2 col-xs-offset-4 text-right">
            <i class="fa fa-caret-left fa-2x flechas-slider prev"></i>
        </div>
        <div class="col-lg-2   col-md-2 col-sm-2  col-xs-2 text-left ">
            <i class="fa fa-caret-right fa-2x flechas-slider next "></i>
        </div>
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 " style="margin-top: 10px">
            <div class="row">
                <div class="small-slider sl-1 slider-active col-xs-12 col-sm-3 col-md-3 col-lg-3 pull-left" index="1">
                    <img src="{!!  URL::asset('assets/images/home/small1.PNG')  !!}" style="width: 100%">
                </div>
                <div class="small-slider sl-2 hidden-xs col-xs-12 col-sm-3 col-md-3 col-lg-3 pull-left" index="2">
                    <img src="{!!  URL::asset('assets/images/home/small2.PNG')  !!}" style="width: 100%">
                </div>
                <div class="small-slider sl-3 hidden-xs col-xs-12  col-sm-3 col-md-3 col-lg-3 pull-left" index="3">
                    <img src="{!!  URL::asset('assets/images/home/small3.PNG')  !!}" style="width: 100%">
                </div>
                <div class="small-slider sl-4 hidden-xs col-xs-12  col-sm-3 col-md-3 col-lg-3 pull-left" index="4">
                    <img src="{!!  URL::asset('assets/images/home/small4.PNG')  !!}" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(".flechas-slider").click(function () {
            var active = $(".slider-active");
            var index = active.attr("index");
            $(".small-slider").addClass("hidden-xs");
            active.removeClass("slider-active");
            if ($(this).hasClass("next")) {
                index = index * 1 + 1
                if (index > 4) {
                    index = 1
                }
                $(".sl-" + index).removeClass("hidden-xs").addClass("slider-active")
            } else {
                index = index * 1 - 1
                if (index < 0) {
                    index = 4
                }
                $(".sl-" + index).removeClass("hidden-sm").addClass("slider-active")
            }
        })
    </script>
@stop