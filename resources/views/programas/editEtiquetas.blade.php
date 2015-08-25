@extends('layouts.defaultAdmin')

@section('title', 'Editar frases')

@section('content')
    @include('admin/partials/_editFrases', ['frases' => $frases, 'idiomas'=>$idiomas, 'redirectme'=>'admin/home'])
@stop
