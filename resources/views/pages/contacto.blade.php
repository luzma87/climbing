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
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-10 col-lg-10 col-md-offset-1 " style="text-align: justify">
            {!! getFrase("textoContacto",session("lang"), "Nosotros estamos gustos de responder todas sus preguntas e inquietudes.<br/>
            Por favor llene el formulario y nos contactaremos con usted.") !!}
        </div>
    </div>
    <div class="row" style="margin-top: 20px">
        <div class="col-md-3 col-xs-12 col-sm-7 col-lg-3  col-md-offset-1"  style="text-align: justify">
            {!! getFrase("textoContacto2",session("lang"), "Nicolas de la Peña 637 y Maximiliano Ontaneda<br/>
            Ciudadela Clemente Ballen<br/>
            Quito- Ecuador<br/>") !!}
        </div>
        <div class="col-md-7 col-xs-12 col-sm-7 col-lg-7">
            <div class="row">
               <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                   <label> {!! getFrase("cntCombre",session("lang"), "Nombre:") !!}</label>
               </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" class="form-control input-sm" name="nombre">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label> {!! getFrase("cntEmail",session("lang"), "E-Mail:") !!}</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" class="form-control input-sm" name="email">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label> {!! getFrase("cntMsn",session("lang"), "Mensaje:") !!}</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <textarea class="form-control input-sm" name="mensaje" style="height: 150px"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">

                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                   capcha aqui
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label> {!! getFrase("textoContacto",session("lang"), "Código:") !!}</label>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" class="form-control input-sm" name="codigo">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">

                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <a href="#" class="btn-rojo">ENVIAR</a>
                </div>
            </div>
        </div>
    </div>
</div>

@stop