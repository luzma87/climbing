<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>
@extends('layouts.defaultAdmin')

@section('title', 'Administrar: Slider común')

@section('content')
    <h1>
        Editar slider común
        <small><a href="{{ URL::to('home') }}" target="_blank">Ver página de inicio</a></small>
    </h1>

    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group btn-group-sm" role="group">
            {!! Form::nth_img_button_clase("Agregar foto", null, "fa-plus", array("id"=>"btnAddFoto", 'label'=>false, "class"=>"btn-verde qtip-top", "data"=>"data-galeria='sliderPrincipal' data-galeria-name='Slider principal'")) !!}
        </div>
    </div>

    <div class="row" style="margin-top: 10px;">
        @each('admin/partials/_galeria', $fotos, 'foto','admin/partials/_galeriaEmpty')
    </div>
@stop

@section("scripts")
    <script type="text/javascript">
        $(function () {
            $("#btnAddFoto").click(function () {
                var $this = $(this);
                openFormFoto("create", $this, "{{ URL::to('admin/createFotoAjax') }}", "{{ URL::to('admin/editFotoAjax') }}", "admin/slider");
                return false;
            });
        });
    </script>
@stop