<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>
@extends('layouts.defaultWeb')

@section('title', 'Inicio')

@section('content')

    @include('pages/partials/_menu')

    <div class="row bottom-row">
        <div class="col-lg-3 col-xs-12  col-lg-offset-1 col-xs-offset-1 col-md-3  col-md-offset-1 col-sm-4  col-sm-offset-1 text-left " style="padding-left: 0px">
            {{ getFrase("culturaAventura",session("lang"), "Cultura y Aventura!") }}
        </div>
        <div class="col-lg-6  col-lg-offset-1 col-md-6  col-md-offset-1 hidden-sm  hidden-xs text-right">
            {{ getFrase("operadoraTuristica",session("lang"), "Operadora turística en Ecuador y Sud América") }}
        </div>
    </div>
    <div class="row page-content">
        <div class="col-lg-2 col-lg-offset-4   col-md-2 col-md-offset-4 col-sm-2 col-sm-offset-4 col-xs-2 col-xs-offset-4 text-right">
            <i class="fa fa-caret-left fa-2x flechas-slider prev"></i>
        </div>
        <div class="col-lg-2   col-md-2 col-sm-2  col-xs-2 text-left ">
            <i class="fa fa-caret-right fa-2x flechas-slider next "></i>
        </div>
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 row" style="margin-top: 10px">
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
    <script type="text/javascript">
        $(".flechas-slider").click(function () {
            var active = $(".slider-active");
            var index = active.attr("index");
            $(".small-slider").addClass("hidden-xs");
            active.removeClass("slider-active");
            if ($(this).hasClass("next")) {
                index = index * 1 + 1;
                if (index > 4) {
                    index = 1
                }
                $(".sl-" + index).removeClass("hidden-xs").addClass("slider-active")
            } else {
                index = index * 1 - 1;
                if (index < 0) {
                    index = 4
                }
                $(".sl-" + index).removeClass("hidden-sm").addClass("slider-active")
            }
        })
    </script>
@stop