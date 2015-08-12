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
        <img style="width: 100%;margin-bottom: 10px" src="{!!  URL::asset('assets/images/equipo/fabricioBig.PNG')  !!}">
        <h1>
            Fabricio Erazo
        </h1>
        <p>
            Quiteño de 46 años, varias ocasiones galardonado como mejor deportista de Pichincha
            y una ocasión como mejor andinista del Ecuador por haber realizado varias primeras
            ascensiones para nuestro país. Seleccionado por la provincia y el país para participar en
            varias expediciones internacionales.
        </p>
        <p>
            Como directivo de la Federación Ecuatoriana de Andinismo creo
            la Escuela Nacional de Montaña e impulsó la escalada deportiva para que sea
            considerada como disciplina deportiva y ahora parte de los Juegos Deportivos Nacionales.
        </p>
        <p>
            Formado como Comunicador Social por la Universidad Central del Ecuador
            y además guía ASEGUIM (Asociación Ecuatoria-na de Guías de Montaña).
            A sido miembro del CUSA (Cuerpo de Socorro Andino).
        </p>
        <p>
            Fabricio habla fluido español, inglés y frances.
        </p>


    </div>
    @include('pages/partials/_menuNosotros')


</div>

@stop