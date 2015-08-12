<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>
@extends('layouts.defaultWeb')

@section('title', 'Nosotros')

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

    <div class="col-xs-10 col-sm-6 col-md-6 col-lg-6 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" style="text-align: justify">
        <h1>
            {{ getFrase("ecuadorAndSouth",session("lang"), "Ecuador and South America Tour Operator") }}
        </h1>
        <p>Somos un grupo de guías especializados en turismo y deportes de montaña. Nuestra
            empresa brinda diferentes tipos de programas y servicios adaptados a cada una de las
            necesidades de nuestros clientes en los cuales prevalece la seguridad y la honestidad.
            Esta empresa tiene como misión dar a conocer al mundo el paraíso maravilloso que es
            el Ecuador.</p>
        <p>
            Nuestro objetivo es ofrecer un servicio de calidad a nuestros clientes, respetando el
            entorno natural y cultural, gestionando el desarrollo de programas y circuitos turísticos
            de bajo impacto ambiental (turismo sin huella ecológica).
            Nuestra visión es ser la empresa líder en manejo de paquetes turísticos y manejo de
            grupos en el Ecuador y Sud América.
        </p>
        <h1 style="text-align: center">
            {{ getFrase("bienvenidosYesClimb",session("lang"), "Bienvenidos a Yes Climbing Guides!") }}
        </h1>

    </div>
    @include('pages/partials/_menuNosotros')


</div>

@stop