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
        @include('pages/partials/_menuGuias', ['selected' => 'fabricio'])
        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5 " style="text-align: justify">
            <img style="width: 100%;margin-bottom: 10px" src="{!!  URL::asset('assets/images/equipo/fabricioBig.PNG')  !!}">

            <h1>
                {!! getFrase("fabricio",session("lang"), "Fabricio Erazo") !!}
            </h1>

            <p>
                {!! getFrase("fabricioTexto",session("lang"), "Quiteño de 46 años, varias ocasiones galardonado como mejor deportista de Pichincha
                y una ocasión como mejor andinista del Ecuador por haber realizado varias primeras
                ascensiones para nuestro país. Seleccionado por la provincia y el país para participar en
                varias expediciones internacionales.") !!}
            </p>

        </div>
        @include('pages/partials/_menuNosotros')
    </div>
@stop