@extends('layouts.defaultAdmin')

@section('title', 'Configuración')

@section('content')
    <h1>CONFIGURACIÓN</h1>

    <ul class="fa-ul">
        <li>
            <a href="{{ action('IdiomasController@index') }}" title="Idiomas">
                <i class="fa-menu fa fa-language"></i> Idiomas
            </a>
        </li>
        <li>
            <a href="{{ action('FrasesController@index') }}" title="Frases">
                <i class="fa-menu fa fa-font"></i> Frases
            </a>
        </li>
        <li>
            <a href="{{ action('UsersController@index') }}" title="Usuarios">
                <i class="fa-menu fa fa-users"></i> Usuarios
            </a>
        </li>
    </ul>
@stop