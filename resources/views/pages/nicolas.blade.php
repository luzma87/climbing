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
        {{  Frase::codigo("culturaAventura")->idioma(session("lang"))->get()->first()->contenido }}
    </div>
    <div class="col-lg-6  col-lg-offset-1 col-md-6  col-md-offset-1 hidden-sm  hidden-xs text-right">
        {{  Frase::codigo("operadoraTuristica")->idioma(session("lang"))->get()->first()->contenido }}
    </div>
</div>
<div class="row page-content">
    <div class="col-xs-5 col-sm-2 col-md-2 col-lg-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">

        <ul style="list-style: none">
            <li style="color: #D11317;text-align: center">
                <img src="{!!  URL::asset('assets/images/equipo/certificaciones.PNG')  !!}" style="width: 100%;margin: 0px"/>
                Certificaciones
            </li>
            <li style="text-align: center">
                <a href="{{URL::to('romel')}}" style="color: #000000">
                    <img src="{!!  URL::asset('assets/images/equipo/romel.PNG')  !!}" style="width: 100%;margin: 0px"/>
                    Romel Sandoval
                </a>
            </li>
            <li style="text-align: center">
                <a href="{{URL::to('nicolas')}}" style="color: #000000">
                    <img src="{!!  URL::asset('assets/images/equipo/nicolas.PNG')  !!}" style="width: 100%;margin: 0px"/>
                    Nicolás Miranda
                </a>
            </li>
            <li style="text-align: center">
                <a href="{{URL::to('robisson')}}" style="color: #000000">
                    <img src="{!!  URL::asset('assets/images/equipo/robinson.PNG')  !!}" style="width: 100%;margin: 0px"/>
                    Robinsson Solari
                </a>
            </li>
            <li style="text-align: center">
                <a href="{{URL::to('fabricio')}}" style="color: #000000">
                    <img src="{!!  URL::asset('assets/images/equipo/fabricio.PNG')  !!}" style="width: 100%;margin: 0px"/>
                    Fabricio Erazo
                </a>
            </li>
            <li style="text-align: center">
                <a href="{{URL::to('ignacio')}}" style="color: #000000">
                    <img src="{!!  URL::asset('assets/images/equipo/ignacio.PNG')  !!}" style="width: 100%;margin: 0px"/>
                    Ignacio Espinosa
                </a>
            </li>
        </ul>

    </div>

    <div class="col-xs-7 col-sm-5 col-md-5 col-lg-5 " style="text-align: justify">
        <img style="width: 100%;margin-bottom: 10px" src="{!!  URL::asset('assets/images/equipo/nicolasBig.PNG')  !!}">
        <h1>
            Nicolás Miranda
        </h1>
        <p>
            Quiteño, nació el 27 de Julio de 1977,
            cuenta con 20 Años de experiencia como andinista.
            En los cuales sobresalen incontables ascensiones y
            aperturas de nuevas vías en distintas montañas del Ecuador y Sur América.
        </p>
        <p>
            Ha realizado importantes expediciones internacionales,
            siendo una de las más importantes su expedición a la
            Antártida donde alcanzó una nueva cumbre para el país que la bautizó con el nombre de Cumbre Ecuador.
        </p>
        <p>
            Guía de Alta Montaña  con certificación nacional (ASEGUIM) e internacional (UIAGM).
            También es uno de los mejores instructores de la Escuela de Formación de Guías del Ecuador.
            Certificación Internacional en primeros auxilios en zonas agrestes Wilderness Advanced First Aid.
        </p>
        <p>
            Además es un deportista élite, dedica su vida a la práctica de deportes  de
            Aventura, Montañismo, Ciclismo de montaña, Atletismo, Escalada en roca, Escalada
            en hielo, Rafting a nivel todos estos deportes a nivel elite; Lo que le ha permitido
            participar en el Mundial de Carreras de Aventura 2014 con una destacada intervención.
        </p>
        <p>
           Nicolás habla fluidamente español e inglés
        </p>


    </div>
    @include('pages/partials/_menuNosotros')


</div>

@stop