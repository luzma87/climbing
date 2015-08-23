<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>
@extends('layouts.defaultWeb')

@section('title', 'Equipo')

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
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " style="text-align: justify">


        <h1>
            {{ getFrase("terminosCondiciones",session("lang"), "TÉRMINOS Y CONDICIONES") }}
        </h1>

        <h1>
            {{ getFrase("terminos_equipo",session("lang"), "Equipo") }}
        </h1>

        <p>
            {{ getFrase("terminosEquiponentrega",session("lang"), "17 Se le proporcionará con una lista de todos los equipos necesarios para llevar a su
            viaje. Usted puede utilizar algunos elementos de los equipos de Yes Climbing Guides.
            La mayoría debe proporcionar a ti mismo. Es su responsabilidad asegurarse de que
            todo el equipo es adecuado para el propósito antes de la fecha de salida y la duración
            del viaje. Usted es responsable de su equipo y sus pertenencias durante el viaje y
            asumir la responsabilidad por el desgaste y los daños incidentales a su equipo. Yes
            Climbing Guides recomienda que contrate un seguro adecuado para cubrir su propio
            equipo.            ") }}
        </p>
        <p>
            {{ getFrase("terminos1_equipoResp",session("lang"), "18 Usted será responsable de cualquier equipo proporcionado durante todo el viaje y
            en caso de que no se devuelve al final del viaje usted acuerda indemnizar Yes Climbing
            Guides por ello..") }}
        </p>

    </div>

    @include('pages/partials/_menuTerminos')

</div>

@stop