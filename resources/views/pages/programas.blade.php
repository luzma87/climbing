<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>
@extends('layouts.defaultWeb')

@section('title', 'Nuestros Programas')

@section('content')


    @include('pages/partials/_menu')

    <div class="row bottom-row">
        <div class="col-lg-3 col-xs-12  col-lg-offset-1 col-xs-offset-1 col-md-3  col-md-offset-1 col-sm-4  col-sm-offset-1 text-left " style="padding-left: 0px">
            {!! getFrase("culturaAventura",session("lang"), "Cultura y Aventura!") !!}
        </div>
        <div class="col-lg-6  col-lg-offset-1 col-md-6  col-md-offset-1 hidden-sm  hidden-xs text-right">
            {!! getFrase("operadoraTuristica",session("lang"), "Operadora turística en Ecuador y Sud América") !!}
        </div>
    </div>
    <div class="row page-content">
        @include('pages/partials/_menuProgramas')

        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 " style="text-align: justify">
            <p>
                {!! getFrase("programas",session("lang"), "Nuestros programas están diseñados brindarle un recorrido lleno contrastes: naturales,
                históricos, culturales, gastronómicos, deportivos y sociales por todas las regiones de
                nuestro país.") !!}
            </p>

            <h2>
                {!! getFrase("programas_precios",session("lang"), "Nuestros precios") !!}
            </h2>

            <p>
                {!! getFrase("programas_preciosTexto",session("lang"), "Son los más competitivos del mercado. Estos dependen del tipo de servicio que deseen
                recibir, están adaptados de acuerdo a cada uno de los programas y los servicios requeridos.") !!}
            </p>
        </div>


    </div>

@stop