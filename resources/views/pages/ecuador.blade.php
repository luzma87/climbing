<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>
@extends('layouts.defaultWeb')

@section('title', 'Ecuador país mega diverso')

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

        <div class="col-xs-10 col-sm-6 col-md-6 col-lg-6 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" style="text-align: justify">
            <h1>
                {!! getFrase("porqueVisitar",session("lang"), "Por qué visitar Ecuador?") !!}
            </h1>

            <p>
                {!! getFrase("porqueVisitarTexto",session("lang"), "Ecuador un país pluricultural y plurinacional, catalogado como uno de los países
                mega diversos en el mundo. Es el segundo país más pequeño de Sud Amèrica
                aproximadamente con 270.000 Km2 posee sin embargo una riqueza natural y cultural
                extraordinaria con solo 0,2 % del territorio mundial es el cuarto país para la
                observación de aves, el 5 país para la observación de reptiles y toda la riqueza natural
                se evidencia en sus cuatro regiones naturales:") !!}
            </p>

            <div class="rojo">{!! getFrase("sierraORegion",session("lang"), "Sierra o región andina:") !!}</div>
            <p>
                {!! getFrase("sierraORegionTexto",session("lang"), "Atravesada por la cordillera de los andes de norte a
                sur, con sus dos cadenas montañosas, dan forma a este país increíble con volcanes
                cubiertos por nieves eternas, valles con suelos de gran fertilidad y expresiones
                culturales alucinantes.") !!}
            </p>

            <div class="rojo">{!! getFrase("costa",session("lang"), "Costa:") !!}</div>
            <p>
                {!! getFrase("costaTexto",session("lang"), "Bañada por el Océano Pacífico con un clima cálido, donde se destacan
                sus principales ecosistemas llenos de biodiversidad como son: bosques tropicales,
                bosques secos, playas tropicales, extensas llanuras y existe la presencia de la
                cordillera de Chongon y Colonche donde se distinguen montañas de poca elevación
                pero con gran riqueza natural.") !!}
            </p>

            <div class="rojo">{!! getFrase("amazonia",session("lang"), "Amazonía:") !!}</div>
            <p>
                {!! getFrase("amazoniaTexto",session("lang"), "Quizás la región más diversa del país, no solamente en el aspecto
                natural, ya que está cubierta por una exuberante vegetación de selva, sino también
                por la presencia de culturas milenarias, ricas en tradiciones y creencias que
                conviven en armonía con la naturaleza que los rodea.") !!}
            </p>

            <div class="rojo">{!! getFrase("galapagos",session("lang"), "Galápagos:") !!}</div>
            <p>
                {!! getFrase("galapagosTexto",session("lang"), "A 1000 Km del continente se encuentran este grupo de islas de
                origen volcánico que son el lugar perfecto para los amantes de la naturaleza,
                declaradas como Patrimonio Natural de la Humanidad por la UNESCO, Galápagos
                ofrece al visitante la oportunidad de disfrutar de un paraíso único en la tierra.") !!}
            </p>


        </div>
        @include('pages/partials/_menuNosotros')


    </div>

@stop