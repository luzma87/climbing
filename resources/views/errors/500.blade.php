@extends('layouts.defaultAdmin')
@section('title', 'Error 500!')
@section('content')
    <div class="alert alert-danger">
        <h1 class="text-center text-danger">Error 500</h1>

        <p style="font-size: large">
            <i class="fa fa-warning"></i>
            Ha ocurrido un error interno
        </p>
    </div>
@stop
