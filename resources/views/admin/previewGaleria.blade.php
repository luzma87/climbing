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
        div.slider_container {
            position : relative;
            top      : 0;
            left     : 0;
            width    : 600px;
            height   : 300px;
        }

        div.slider_container div.loading {
            position : absolute;
            top      : 0;
            left     : 0;
        }

        div.slider_container div.slides {
            cursor   : move;
            position : absolute;
            overflow : hidden;
            left     : 0;
            top      : 0;
            width    : 600px;
            height   : 300px;
        }

        div.slides div.caption {
            position   : absolute;
            bottom     : 5px;
            left       : 5px;
            background : white;
            width      : 590px;
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
            background-color : #2a3755;
        }

        .jssorb01 .dn, .jssorb01 .dn:hover {
            background-color : #555555;
        }
    </style>
@stop

@section('content')
    <div id="slider1_container" class="slider_container">
        <!-- Loading Screen -->
        <div u="loading" class="loading">
            Cargando la galería
        </div>

        <!-- Slides Container -->
        <div u="slides" class="slides">

            @forelse($fotos as $foto)
                <div>
                    <img u="image" src="{!!  URL::asset($foto->path) !!}" class="img-thumbnail">

                    <div u="caption" class="caption" t="caption-transition-name">
                        {{ getTituloFoto($foto->id, session("lang"), "Sin título") }}
                    </div>
                </div>
            @empty
                <div class="col-md-10 col-md-offset-1 alert alert-info">
                    <h3>No hay fotos en esta galería!</h3>
                </div>
            @endforelse
        </div>

        <!-- Navigator Skin Begin -->
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="top: 70px; right: 40px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        <!-- Navigator Skin End -->
    </div>

    <script>
        jQuery(document).ready(function ($) {
            var jssor_slider1 = new $JssorSlider$('slider1_container', {
                $AutoPlay               : true,
                $BulletNavigatorOptions : {                  //[Optional] Options to specify and enable navigator or not
                    $Class        : $JssorBulletNavigator$,  //[Required] Class to create navigator instance
                    $ChanceToShow : 2,                       //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter   : 0,                       //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps        : 1,                       //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes        : 1,                       //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX     : 3,                       //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY     : 10,                      //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation  : 1                        //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            });
        });
    </script>

@stop