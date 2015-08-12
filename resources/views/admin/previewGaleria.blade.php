<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>
@extends('layouts.defaultAdmin')

@section('title', 'Previsualización de galería')

@section('header')
    {!! HTML::script('assets/js/plugins/jssor/js/jssor.js') !!}
    {!! HTML::script('assets/js/plugins/jssor/js/jssor.slider.js') !!}

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
@stop

@section('content')
    <div class="row">
        @if($galeria == 'sliderPrincipal')
            @include('admin/partials/_bannerSlider', ['fotos' => $fotos])
        @elseif ($galeria == 'homePrincipal')
            @include('admin/partials/_carrouselSlider', ['fotos' => $fotos])
        @endif
    </div>
@stop