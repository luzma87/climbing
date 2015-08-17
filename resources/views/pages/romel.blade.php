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
            {{ getFrase("culturaAventura",session("lang"), "Cultura y Aventura!") }}
        </div>
        <div class="col-lg-6  col-lg-offset-1 col-md-6  col-md-offset-1 hidden-sm  hidden-xs text-right">
            {{ getFrase("operadoraTuristica",session("lang"), "Operadora turística en Ecuador y Sud América") }}
        </div>
    </div>
    <div class="row page-content">
        @include('pages/partials/_menuGuias', ['selected' => 'romel'])

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5 " style="text-align: justify">
            <img style="width: 100%;margin-bottom: 10px" src="{!!  URL::asset('assets/images/equipo/romelBig.PNG')  !!}">

            <h1>
                {{ getFrase("gerente",session("lang"), "Gerente General") }} {{ getFrase("romel",session("lang"), "Romel Sandoval") }}
            </h1>

            <p>
                {{ getFrase("romel1",session("lang"), "Romel cuenta con más de 16 años de experiencia en manejo de
                grupos como tour líder en los cuales ha escalado todos los nevados del
                Ecuador por vías normales y rutas técnicas.
                También cuenta con varias expediciones internacionales.") }}
            </p>

            <p>
                {{ getFrase("romel2",session("lang"), "Toda su vida ha estado vinculada al deporte,
                naturaleza y la aventura. Apasionado por fotografía y la vida en estado puro.
                Él es inteligente, confiable, carismático y paciente.") }}
            </p>

            <p>
                {{ getFrase("romel3",session("lang"), "Su profesionalismo y experiencia le ha permitido ser el
                Gerente General de la compañía “YES Climbing Guides”") }}
            </p>

            <p>
                {{ getFrase("romel4",session("lang"), "Guía de Montaña ASEGUIM, Ing. Gestión Ambiental, Auditor Líder ISO 14001,
                Certificación Internacional en primeros auxi-lios en zonas
                agrestes Wilderness Advanced First Aid.") }}
            </p>

            <p>
                {{ getFrase("romel5",session("lang"), "Dentro de su trayectoria deportiva ha participado en las más
                prestigiosas carreras atletismo de fondo del país, carreras de aventura y
                competencias de bicicleta de montaña.") }}
            </p>

            <p>
                {{ getFrase("romel6",session("lang"), "Romel habla fluido español e inglés.") }}
            </p>

        </div>
        @include('pages/partials/_menuNosotros')


    </div>

@stop