<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>
@extends('layouts.defaultWeb')

@section('title', 'Cancelaciones')

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
            {{ getFrase("terminos_reserva",session("lang"), "Cancelaciones") }}
        </h1>

        <p>
            {{ getFrase("terminosCancelacionPorU",session("lang"), "Cancelación por usted
            5. Aviso de cancelación por su parte debe darse por escrito. En caso de cancelación,
            se aplicará la siguiente escala de cargos:
            i. 30 días o más antes de la Fecha de Salida = Pérdida del depósito.
            ii. 29 a 15 días a partir del inicio del viaje = 50% del costo total del viaje
            iii. Menos de 14 días antes de la fecha de salida = Pérdida del 100% del costo total
            del viaje, a menos que se acuerde otra cosa con el Yes Climbing Guides debido a
            circunstancias imprevistas.") }}
        </p>
        <p>
            {{ getFrase("terminos1_cancelacionPorYes",session("lang"), "Cancelación por Yes Climbing Guides
            6. Un viaje puede ser cancelado como consecuencia de acontecimientos imprevistos
            y más allá de control de Yes Climbing Guides, incluyendo pero no limitado a la
            guerra, disturbios, conflictos laborales, actividad terrorista, desastres naturales o
            desastres nucleares, fuego, epidemias o riesgos para la salud, aeropuertos cerrados
            o congestionados, puertos o estaciones cerradas, los cambios impuestos por reprogramación
            o cancelación del transporte, las condiciones climáticas adversas.") }}
        </p>

    </div>

    @include('pages/partials/_menuTerminos')

</div>

@stop