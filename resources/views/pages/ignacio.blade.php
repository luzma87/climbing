<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>
@extends('layouts.defaultWeb')

@section('title', 'Nuestro equipo')

@section('content')
    @include('pages/partials/_menu')

    <div class="row bottom-row">
        <div class="col-lg-3 col-xs-12  col-lg-offset-1 col-xs-offset-1 col-md-3  col-md-offset-1 col-sm-4  col-sm-offset-1 text-left " style="padding-left: 0px">
            {{  Frase::codigo("culturaAventura")->idioma(session("lang"))->get()->first()->contenido }}
        </div>
        <div class="col-lg-6  col-lg-offset-1 col-md-6  col-md-offset-1 hidden-sm  hidden-xs text-right">
            {{  Frase::codigo("operadoraTuristica")->idioma(session("lang"))->get()->first()->contenido }}
        </div>
    </div>
    <div class="row page-content">
        @include('pages/partials/_menuGuias', ['selected' => 'ignacio'])

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5 " style="text-align: justify">
            <img style="width: 100%;margin-bottom: 10px" src="{!!  URL::asset('assets/images/equipo/ignacioBig.PNG')  !!}">

            <h1>
                {!! getFrase("ignacio",session("lang"), "Ignacio Espinosa") !!}
            </h1>

            <p>
                {!! getFrase("ignacioTexto",session("lang"), "Quiteño, nació el  26 de Noviembre de 1976 en Quito.
                Conocido en el mundo de la montaña como Nacho cuenta con más de 17 años de experiencia en Alta Montaña,
                13 años de experiencia profesional como Guía de Alta Montaña.") !!}
            </p>
        </div>
        @include('pages/partials/_menuNosotros')
    </div>
@stop