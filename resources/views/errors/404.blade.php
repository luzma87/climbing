@extends('layouts.defaultWeb')
@section('title', 'Error 404!')
@section('content')
    <div class="alert alert-danger">
        <h1 class="text-center text-danger">Error 404</h1>

        <p style="font-size: large">
            <i class="fa fa-warning"></i>
            No se encontró la página solicitada
        </p>
    </div>
@stop
