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

        @include('pages/partials/_menuGuias', ['selected' => 'certificaciones'])

        <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5 " style="text-align: justify">
            <h1>
                {!! getFrase("nuestroEquipo",session("lang"), "Nuestro Equipo") !!}
            </h1>

            <p>
                {!! getFrase("nuestroEquipoTexto",session("lang"), "Nuestro equipo está conformado por guías certificados con
                muchos años de experiencia como montañeros, escaladores y
                deportistas de aventura.") !!}
            </p>

            <p style="text-align: center">
                <img src="{!!  URL::asset('assets/images/iconos.PNG')  !!}" style="height: 90%">
            </p>
        </div>
        @include('pages/partials/_menuNosotros')
    </div>

@stop