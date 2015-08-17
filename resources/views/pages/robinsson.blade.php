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
        @include('pages/partials/_menuGuias', ['selected' => 'robinsson'])

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5 " style="text-align: justify">
            <img style="width: 100%;margin-bottom: 10px" src="{!!  URL::asset('assets/images/equipo/robissonBig.PNG')  !!}">

            <h1>
                {{ getFrase("robinsson",session("lang"), "Robinsson Solari") }}
            </h1>

            <p>
                {{ getFrase("robinsson1",session("lang"), "Quiteño, nació el 12 de enero de 1973,
                cuenta con más de 20 años de experiencia,
                ha realizado ascensiones todas las montañas del Ecuador.") }}
            </p>

            <p>
                {{ getFrase("robinsson2",session("lang"), "Ha participado en expediciones internacionales en Perú,
                Bolivia y Argentina. También fue seleccionado de escalada deportiva de la
                Provincia de Pichincha (Asociación de Andinismo de Pichincha),
                teniendo una destacada participación. Nombrado el mejor escalador
                del país dignidad que lo otorgó la FEDAN (Federación Ecuatoriana de Andinismo).") }}
            </p>

            <p>
                {{ getFrase("robinsson3",session("lang"), "Profesionalmente es guía de montaña, habiendo obtenido este título a nivel
                nacional en la ASEGUIM (Asociación de Guías de Montaña del Ecuador) y a
                nivel internacional la certificación de guía de montaña UIAGM
                (Unión Internacional de Guías de Montaña) en Bolivia, durante el período 2007 al 2009.
                Certificación Internacional en primeros auxilios en zonas agrestes Wilderness Advanced First Aid.
                Pertenece al grupo de instructores de la FEDAN y de la ASEGUIM.") }}
            </p>

            <p>
                {{ getFrase("robinsson4",session("lang"), "Destaca su habilidad para adaptarse e interactuar con grupos humanos diversos,
                precautelando su seguridad y satisfacción de sus clientes.") }}
            </p>

            <p>
                {{ getFrase("robinsson5",session("lang"), "Robinsson habla fluido español e inglés.") }}
            </p>


        </div>
        @include('pages/partials/_menuNosotros')


    </div>

@stop