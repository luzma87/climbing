<?php
use App\Frase;
use App\Foto;
use App\Idioma;

?>
@extends('layouts.defaultAdmin')

@section('title', 'Administración')

@section('content')
    <h1>ADMIN</h1>
    <p>
        {{  Frase::codigo("culturaAventura")->idioma("es")->get()->first()->contenido }}
    </p>
    <p>
        {{  Frase::codigo("culturaAventura")->idioma("en")->get()->first()->contenido }}
    </p>
@stop