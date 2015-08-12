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
    @include('pages/partials/_menuProgramas')

    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 " style="text-align: justify">
        <p>
            Nuestros programas están diseñados brindarle un recorrido lleno contrastes: naturales,
            históricos, culturales, gastronómicos, deportivos y sociales por todas las regiones de
            nuestro país.
        </p>
        <p>
            Programas:<br/>
            <ul>
            <li>Ascencionismo (Fácil, Medio, Avanzado)</li>
            <li>Cursos de escalada en roca (Principiante, Medio, Avanzado)</li>
            <li>Cursos de escalada en hielo (Principiante, Medio, Avanzado)</li>
            <li>Caminatas (Uno o varios días)</li>
            <li>Mercados indígenas (Otavalo, Pujilí, Saquisilí)</li>
            <li>Haciendas Coloniales</li>
            <li>Visitas a ciudades (City tour, Compras)</li>
            <li>Salud y relax (Baños termales, SPA, Masajes Terapéuticos)</li>
            </ul>
        </p>
        <p>
            También usted tiene la opción de diseñar su programa contando con nuestra asesoría y
            apoyo para que su estadía en el Ecuador sea una experiencia inolvidable.
        </p>
        <h2>
            Nuestros precios
        </h2>
        <p>
            Son los más competitivos del mercado. Estos dependen del tipo de servicio que deseen
            recibir, están adaptados de acuerdo a cada uno de los programas y los servicios requeridos.
        </p>
    </div>



</div>

@stop