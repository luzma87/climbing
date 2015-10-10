@extends('layouts.defaultWeb')

@section('title', 'Nuestros Programas')

@section('content')

    @include('pages/partials/_menu', ['fotos' => $fotosSlider])

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

        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
            @include('programas/partials/_show_'.$programa->tipo, ['grupo' => $grupo, 'nombre'=>$nombre, "programa" => $programa,
          "lang" => $lang, "frase" => $frase, "dificultad" => $dificultad])
        </div>
    </div>

@stop