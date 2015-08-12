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
        {{  Frase::codigo("culturaAventura")->idioma(session("lang"))->get()->first()->contenido }}
    </div>
    <div class="col-lg-6  col-lg-offset-1 col-md-6  col-md-offset-1 hidden-sm  hidden-xs text-right">
        {{  Frase::codigo("operadoraTuristica")->idioma(session("lang"))->get()->first()->contenido }}
    </div>
</div>
<div class="row page-content">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " style="text-align: justify">

        <h1>TÉRMINOS Y CONDICIONES</h1>
        <h1>RESERVA Y PAGO</h1>
        <p>
            1. Todas las reservas se hacen con Yes
            Climbing Guides, Quito, Ecuador. Para reser-var un lugar,
            es necesario que nos envíe un depósito no reembolsable del 30%
            del costo total del viaje, por transferencia bancaria. No se
            aceptan tarjetas de crédito. Desde la mayoría de los bancos,
            se puede transferir el depósito electrónicamente a través de Internet mediante
            el uso de nuestros datos bancarios Yes Guías de Escalada a continuación:
        </p>
        <h6>BANCO</h6>
        <h6>TITULAR DE LA CUENTA:</h6>
        <p>
            NÚMERO DE CUENTA (CORRIENTE): <br/>
            SWIFT:
        </p>
        <h6>DIRECCIÓN DEL BANCO:</h6>
        <p>Quito, Ecuador <br>
            Tel: 00593 (0)</p>
        <h6>
            TITULARES DE CUENTAS DIRECCIÓN:
        </h6>
        Quito, Ecuador <br/>
        Tel: 00593 (0) <br/>
        Por favor, añada USD 25.00 por tarifa de transferencia bancaria.<br/>
        2. Los depósitos no son reembolsables. Se recomienda contratar un seguro de viaje al reservar,
        para protegerlo en algunas circunstancias si usted tiene que cancelar. <br/>
        3. El Balance (más USD 25.00 por transferencia bancaria) debe ser pagado un mes antes del inicio del viaje.<br/>
        4. Favor descargue, complete y escanee el formulario de solicitud de Términos y Con-diciones
        y enviar   al correo electrónico de Yes Climbing Guides  al mismo tiempo que su depósito.
    </div>

    @include('pages/partials/_menuTerminos')

</div>

@stop