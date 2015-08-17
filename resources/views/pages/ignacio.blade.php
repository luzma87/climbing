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
                {{ getFrase("ignacio",session("lang"), "Ignacio Espinosa") }}
            </h1>

            <p>
                {{ getFrase("ignacio1",session("lang"), "Quiteño, nació el  26 de Noviembre de 1976 en Quito.
                Conocido en el mundo de la montaña como Nacho cuenta con más de 17 años de experiencia en Alta Montaña,
                13 años de experiencia profesional como Guía de Alta Montaña.") }}
            </p>

            <p>
                {{ getFrase("ignacio2",session("lang"), "Cuenta con formación certificada a
                nivel nacional e internacional: ASEGUIM
                (Asociación Ecuatoriana de Guías de Montaña),
                Certificación de Guía UIAGM (Union Internationale des Associations de Guides de Montagnes),
                Certificación WFR (Wilderness First Responder) acreditada por NOLS (National Outdoor Leadership School).") }}
            </p>

            <p>
                {{ getFrase("ignacio3",session("lang"), "Es miembro del cuerpo de instructores y Monitor en los cursos dictados por la
                Escuela de Guías del Ecuador ASEGUIM. Ha realizado trabajos de
                investigación para la Cruz Roja Suiza y la Fundación RIOS en levantamiento de
                información en la rama de etnomedicina.") }}
            </p>

            <p>
                {{ getFrase("ignacio4",session("lang"), "Destaca su habilidad para adaptarse e interactuar con grupos humanos diversos,
                precautelando su seguridad y satisfacción de sus clientes.") }}
            </p>

            <p>
                {{ getFrase("ignacio4",session("lang"), "Habla fluidamente español e inglés") }}
            </p>
        </div>
        @include('pages/partials/_menuNosotros')
    </div>
@stop