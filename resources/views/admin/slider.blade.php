<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>
@extends('layouts.defaultAdmin')

@section('title', 'Administrar: Banner slider')

@section('content')
    <h1>
        Editar banner slider
        <small>
            <a href="{{ URL::to('admin/previewGaleria','sliderPrincipal') }}" target="_blank">Ver slider</a>
        </small>
    </h1>

    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group btn-group-sm" role="group">
            {!! Form::nth_img_button_clase("Agregar foto", null, "fa-plus", array("id"=>"btnAddFoto", 'label'=>false, "class"=>"btn-verde qtip-top", "data"=>"data-galeria='sliderPrincipal' data-galeria-name='Slider principal'")) !!}
        </div>
    </div>

    <div class="row" style="margin-top: 10px;">
        @forelse($fotos as $foto)
            @include('admin/partials/_galeria', ['fotos' => $foto, 'idiomas'=>$idiomas, 'redirectme'=>'admin/slider'])
        @empty
            <div>
                <h3>No hay fotos en esta galería!</h3>
            </div>
        @endforelse
    </div>
@stop

@section("scripts")
    <script type="text/javascript">
        var redirectme = "admin/slider";
        $(function () {
            $("#btnAddFoto").click(function () {
                openFormFoto("create", $(this), "{{ URL::to('admin/createFotoAjax') }}", redirectme);
                return false;
            });
            $(".btn-edit-frase-foto").click(function () {
                openFormFraseFoto("edit", $(this), "{{ URL::to('admin/editFraseFotoAjax') }}", redirectme);
                return false;
            });
            $(".btn-create-frase-foto").click(function () {
                openFormFraseFoto("create", $(this), "{{ URL::to('admin/createFraseFotoAjax') }}", redirectme);
                return false;
            });
            $(".btn-delete-foto").click(function () {
                deleteFoto($(this));
                return false;
            });
        });
    </script>
@stop