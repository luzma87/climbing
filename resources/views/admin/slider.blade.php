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
            <div class="col-md-10 col-md-offset-1 alert alert-info">
                <h3>No hay fotos en esta galería!</h3>
            </div>
        @endforelse
    </div>
@stop

@section("scripts")
    <script type="text/javascript">
        function openFormFrase(tipo, $btn) {
            openLoader();
            var url = "", title = "";
            if (tipo == "create") {
                url = "{{ URL::to('admin/createFraseFotoAjax') }}";
                title = "Crear frases";
            } else if (tipo == "edit") {
                url = "{{ URL::to('admin/editFraseFotoAjax') }}";
                title = "Modificar frases";
            }
            var $tr = $btn.parents("tr");
            var id = $tr.data("id");
            var lang = $tr.data("lang");
            var foto = $tr.data("foto");
            $.ajax({
                type    : "POST",
                url     : url,
                data    : {
                    id         : id,
                    lang       : lang,
                    foto       : foto,
                    redirectme : "admin/slider"
                },
                success : function (msg) {
                    closeLoader();
                    bootbox.dialog({
                        title   : title,
                        message : msg,
                        buttons : {
                            success : {
                                label     : "<i class='fa fa-floppy-o'></i> Guardar",
                                className : "btn-success",
                                callback  : function () {
                                    var $frm = $("#frmFraseFoto");
                                    $frm.submit();
                                    return false;
                                }
                            },
                            danger  : {
                                label     : "Cancelar",
                                className : "btn-default",
                                callback  : function () {
                                }
                            }
                        }
                    });
                },
                error   : function () {

                }
            });
        }

        $(function () {
            $("#btnAddFoto").click(function () {
                var $this = $(this);
                openFormFoto("create", $this, "{{ URL::to('admin/createFotoAjax') }}", "{{ URL::to('admin/editFotoAjax') }}", "admin/slider");
                return false;
            });

            $(".btn-edit").click(function () {
                var $this = $(this);
                openFormFrase("edit", $this);
                return false;
            });

            $(".btn-create").click(function () {
                var $this = $(this);
                openFormFrase("create", $this);
                return false;
            });

            $(".btn-delete-foto").click(function () {
                var $frm = $(this).parents("form");
                bootbox.confirm("¿Está seguro de querer eliminar esta foto y todas sus frases?", function (res) {
                    if (res) {
                        openLoader("Eliminando");
                        $frm.submit();
                    }
                });
                return false;
            });
        });
    </script>
@stop