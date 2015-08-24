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
            {!! getFrase("culturaAventura",session("lang"), "Cultura y Aventura!") !!}
        </div>
        <div class="col-lg-6  col-lg-offset-1 col-md-6  col-md-offset-1 hidden-sm  hidden-xs text-right">
            {!! getFrase("operadoraTuristica",session("lang"), "Operadora turística en Ecuador y Sud América") !!}
        </div>
    </div>
    <div class="row page-content">
        @include('pages/partials/_menuGuias', ['selected' => 'nicolas'])

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5 " style="text-align: justify">
            <img style="width: 100%;margin-bottom: 10px" src="{!!  URL::asset('assets/images/equipo/nicolasBig.PNG')  !!}">

            <h1>
                {!! getFrase("nicolas",session("lang"), "Nicolás Miranda") !!}
            </h1>

            <p>
                {!! getFrase("nicolasTexto",session("lang"), "Quiteño, nació el 27 de Julio de 1977,
                cuenta con 20 Años de experiencia como andinista.
                En los cuales sobresalen incontables ascensiones y
                aperturas de nuevas vías en distintas montañas del Ecuador y Sur América.") !!}
            </p>

        </div>
        @include('pages/partials/_menuNosotros')

    </div>

@stop