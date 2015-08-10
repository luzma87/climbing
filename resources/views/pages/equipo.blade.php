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
                <img src="{!!  URL::asset('assets/images/equipo/romel.PNG')  !!}" style="width: 100%;margin: 0px"/>
                Romel Sandoval
            </li>
            <li style="text-align: center">
                <img src="{!!  URL::asset('assets/images/equipo/nicolas.PNG')  !!}" style="width: 100%;margin: 0px"/>
                Nicolás Miranda
            </li>
            <li style="text-align: center">
                <img src="{!!  URL::asset('assets/images/equipo/robinson.PNG')  !!}" style="width: 100%;margin: 0px"/>
                Robinsson Solari
            </li>
            <li style="text-align: center">
                <img src="{!!  URL::asset('assets/images/equipo/fabricio.PNG')  !!}" style="width: 100%;margin: 0px"/>
                Fabricio Erazo
            </li>
            <li style="text-align: center">
                <img src="{!!  URL::asset('assets/images/equipo/ignacio.PNG')  !!}" style="width: 100%;margin: 0px"/>
                Ignacio Espinosa
            </li>
        </ul>

    </div>

    <div class="col-xs-7 col-sm-4 col-md-4 col-lg-4 " style="text-align: justify">
        <h1>
            Nuestro equipo
        </h1>
        <p>Nuestro equipo está conformado por guías certificados con
            muchos años de experiencia como montañeros, escaladores y
            deportistas de aventura.</p>
        <p>
            Apasionados por la montaña y la cultura, con un alto sentido de
            responsabilidad, buen sentido del humor y calidad humana
            Dentro de las certificaciones más destacadas de nuestro
            equipo están:
        </p>
        <p>
            ASEGUIM (Asociación de Ecuatoriana de Guías de Montaña)
        </p>
        <p>
            UIAGM (Unión Internacional de Guías de Montaña)
        </p>
        <p>
            WFR (Wilderness First Responder), WAFA (Wilderness Advanced
            First Aid) acreditada por NOLS (National Outdoor Leadership
            School) Wilderness Medicine Institute.
        </p>

        <p style="text-align: center">
            <img src="{!!  URL::asset('assets/images/iconos.PNG')  !!}" style="height: 90%">
        </p>
    </div>
    @include('pages/partials/_menuNosotros')


</div>

@stop