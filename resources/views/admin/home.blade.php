<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>
@extends('layouts.defaultAdmin')

@section('title', 'Administrar: Inicio')

@section('content')
    <h1>
        Editar página de inicio
        <small><a href="{{ URL::to('home') }}" target="_blank">Ver la página</a></small>
    </h1>

    @include('admin/partials/_editFrases', ['frases' => $frases, 'idiomas'=>$idiomas, 'redirectme'=>'admin/home'])

    <h2>
        Fotos en esta página: Carrusel Slider
        <small>
            <a href="{{ URL::to('admin/previewGaleria','homePrincipal') }}" target="_blank">Ver slider</a>
        </small>
    </h2>
    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group btn-group-sm" role="group">
            {!! Form::nth_img_button_clase("Agregar foto", null, "fa-plus", array("id"=>"btnAddFoto", 'label'=>false, "class"=>"btn-verde qtip-top", "data"=>"data-galeria='homePrincipal' data-galeria-name='Carrusel slider'")) !!}
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        @forelse($fotos as $foto)
            @include('admin/partials/_galeria', ['fotos' => $foto, 'idiomas'=>$idiomas, 'redirectme'=>'admin/home'])
        @empty
            <div>
                <h3>No hay fotos en esta galería!</h3>
            </div>
        @endforelse
    </div>

@stop

@section("scripts")
    <script type="text/javascript">
        var redirectme = "admin/home";
        $(function () {
            $(".btn-edit-frase-foto").click(function () {
                openFormFraseFoto("edit", $(this), "{{ URL::to('adminFrasesFoto/editAjax') }}", redirectme);
                return false;
            });
            $(".btn-create-frase-foto").click(function () {
                openFormFraseFoto("create", $(this), "{{ URL::to('adminFrasesFoto/createAjax') }}", redirectme);
                return false;
            });
            $("#btnAddFoto").click(function () {
                openFormFoto("create", $(this), "{{ URL::to('adminFotos/createAjax') }}", redirectme);
                return false;
            });
            $(".btn-delete-foto").click(function () {
                deleteFoto($(this));
                return false;
            });
        });
    </script>
@stop