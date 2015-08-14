@extends('layouts.defaultAdmin')

@section('title', 'Nuevo programa')

@section('content')
    @include('programas/partials/_form_'.$tipo, ['submit_text' => 'Crear idioma'])
@stop