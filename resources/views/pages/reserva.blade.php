<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>
@extends('layouts.defaultWeb')

@section('title', 'Reservas')

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
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " style="text-align: justify">

            <h1>
                {!! getFrase("terminosReserva_condiciones",session("lang"), "TÉRMINOS Y CONDICIONES") !!}
            </h1>

            <h1>
                {!! getFrase("terminosReserva_reserva",session("lang"), "RESERVA Y PAGO") !!}
            </h1>

            <p>
                {!! getFrase("terminosReserva_texto",session("lang"), "1. Todas las reservas se hacen con Yes
                Climbing Guides, Quito, Ecuador. Para reser-var un lugar,
                es necesario que nos envíe un depósito no reembolsable del 30%
                del costo total del viaje, por transferencia bancaria. No se
                aceptan tarjetas de crédito. Desde la mayoría de los bancos,
                se puede transferir el depósito electrónicamente a través de Internet mediante
                el uso de nuestros datos bancarios Yes Guías de Escalada a continuación:") !!}
            </p>
        </div>

        @include('pages/partials/_menuTerminos')

    </div>

@stop