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
                {{ getFrase("terminos_reserva",session("lang"), "RESERVA Y PAGO") }}
            </h1>

            <p>
                {{ getFrase("terminos1",session("lang"), "1. Todas las reservas se hacen con Yes
                Climbing Guides, Quito, Ecuador. Para reser-var un lugar,
                es necesario que nos envíe un depósito no reembolsable del 30%
                del costo total del viaje, por transferencia bancaria. No se
                aceptan tarjetas de crédito. Desde la mayoría de los bancos,
                se puede transferir el depósito electrónicamente a través de Internet mediante
                el uso de nuestros datos bancarios Yes Guías de Escalada a continuación:") }}
            </p>
            <h6>
                {{ getFrase("terminos1_banco",session("lang"), "BANCO") }}
            </h6>
            <h6>
                {{ getFrase("terminos1_titular",session("lang"), "TITULAR DE LA CUENTA:") }}
            </h6>

            <p>
                {{ getFrase("terminos1_cuenta1",session("lang"), "NÚMERO DE CUENTA (CORRIENTE):") }}
                <br/>
                {{ getFrase("terminos1_cuenta2",session("lang"), "SWIFT:") }}
            </p>
            <h6>
                {{ getFrase("terminos1_direccionBanco1",session("lang"), "DIRECCIÓN DEL BANCO:") }}
            </h6>

            <p>
                {{ getFrase("terminos1_direccionBanco2",session("lang"), "Quito, Ecuador") }}
                <br>
                {{ getFrase("terminos1_direccionBanco3",session("lang"), "Tel: 00593 (0)") }}
            </p>
            <h6>
                {{ getFrase("terminos1_titularesDireccion1",session("lang"), "TITULARES DE CUENTAS DIRECCIÓN:") }}
            </h6>
            {{ getFrase("terminos1_titularesDireccion2",session("lang"), "Quito, Ecuador") }}
            <br/>
            {{ getFrase("terminos1_titularesDireccion3",session("lang"), "Tel: 00593 (0)") }}
            <br/>
            {{ getFrase("terminos1_transferencia",session("lang"), "Por favor, añada USD 25.00 por tarifa de transferencia bancaria.") }}
            <br/>
            {{ getFrase("terminos2",session("lang"), "2. Los depósitos no son reembolsables. Se recomienda contratar un seguro de viaje al reservar,
            para protegerlo en algunas circunstancias si usted tiene que cancelar.") }}
            <br/>
            {{ getFrase("terminos3",session("lang"), "3. El Balance (más USD 25.00 por transferencia bancaria) debe ser pagado un mes antes del inicio del
            viaje.") }}
            <br/>
            {{ getFrase("terminos4",session("lang"), "4. Favor descargue, complete y escanee el formulario de solicitud de Términos y Con-diciones
            y enviar al correo electrónico de Yes Climbing Guides al mismo tiempo que su depósito.") }}
        </div>

        @include('pages/partials/_menuTerminos')

    </div>

@stop