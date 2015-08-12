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
        <img style="width: 100%;margin-bottom: 10px" src="{!!  URL::asset('assets/images/equipo/ignacioBig.PNG')  !!}">
        <h1>
            Ignacio Espinosa Andrade
        </h1>
        <p>
            Quiteño, nació el  26 de Noviembre de 1976 en Quito.
            Conocido en el mundo de la montaña como Nacho cuenta con más de 17 años de experiencia en Alta Montaña,
            13 años de experiencia profesional como Guía de Alta Montaña.
        </p>
        <p>
            Cuenta con formación certificada a
            nivel nacional e internacional: ASEGUIM
            (Asociación Ecuatoriana de Guías de Montaña),
            Certificación de Guía UIAGM (Union Internationale des Associations de Guides de Montagnes),
            Certificación WFR (Wilderness First Responder) acreditada por NOLS (National Outdoor Leadership School).
        </p>
        <p>
            Es miembro del cuerpo de instructores y Monitor en los cursos dictados por la
            Escuela de Guías del Ecuador ASEGUIM. Ha realizado trabajos de
            investigación para la Cruz Roja Suiza y la Fundación RIOS en levantamiento de
            información en la rama de etnomedicina.
        </p>
        <p>
            Destaca su habilidad para adaptarse e interactuar con grupos humanos diversos,
            precautelando su seguridad y satisfacción de sus clientes.
        </p>
        <p>
            Habla fluidamente español e inglés
        </p>


    </div>
    @include('pages/partials/_menuNosotros')


</div>

@stop