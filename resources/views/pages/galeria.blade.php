@extends('layouts.defaultWeb')

@section('title', 'Nuestro equipo')

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
    @include('pages/partials/_menuGaleria', ['selected' => 'robinsson'])

    <div class="col-xs-7 col-sm-5 col-md-7 col-lg-7 " style="text-align: justify">
        <img style="width: 100%;margin-bottom: 10px" src="{!!  URL::asset('assets/images/equipo/robissonBig.PNG')  !!}">



    </div>


</div>
@stop