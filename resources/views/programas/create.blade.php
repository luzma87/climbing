@extends('layouts.defaultAdmin')

@section('title', 'Nuevo programa')

@section('content')

    {!! Form::model(new App\Programa, ['id'=>'frmPrograma', 'files' => true, 'route' => ['adminProgramas.store']]) !!}
    @include('programas/partials/_form_'.$tipo, ['submit_text' => 'Crear programa', 'grupo' => $grupo, 'nombre'=>$nombre, "tipos" => $tipos, "lang" => "es"])
    {!! Form::close()  !!}
@stop