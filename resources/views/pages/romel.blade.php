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
        <img style="width: 100%;margin-bottom: 10px" src="{!!  URL::asset('assets/images/equipo/romelBig.PNG')  !!}">
        <h1>
            Gerente General Romel Sandoval
        </h1>
        <p>
            Romel cuenta con más de 16 años de experiencia en manejo de
            grupos como tour líder en los cuales ha escalado todos los nevados del
            Ecuador por vías normales y rutas técnicas.
            También cuenta con varias expediciones internacionales.
        </p>
        <p>
            Toda su vida ha estado vinculada al deporte,
            naturaleza y la aventura. Apasionado por fotografía y la vida en estado puro.
            Él es inteligente, confiable, carismático y paciente.
        </p>
        <p>
            Su profesionalismo y experiencia le ha permitido ser el
            Gerente General de la compañía “YES Climbing Guides”
        </p>
        <p>
            Guía de Montaña ASEGUIM, Ing. Gestión Ambiental, Auditor Líder ISO 14001,
            Certificación Internacional en primeros auxi-lios en zonas
            agrestes Wilderness Advanced First Aid.
        </p>
        <p>
            Dentro de su trayectoria deportiva ha participado en las más
            prestigiosas carreras atletismo de fondo del país, carreras de aventura y
            competencias de bicicleta de montaña.
        </p>

        <p>Romel habla fluido español e inglés.</p>

    </div>
    @include('pages/partials/_menuNosotros')


</div>

@stop