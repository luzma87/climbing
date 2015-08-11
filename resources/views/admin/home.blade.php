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

    <h2>Frases en esta página</h2>

    <table class="table table-condensed table-bordered table-striped table-hover verde">
        <thead>
            <tr>
                @foreach($idiomas as $idioma)
                    <th width="{{ $prct }}%" class="text-white">{{ $idioma->nombre }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($frases as $frase)
                <tr>
                    @foreach($idiomas as $idioma)
                        <td>
                            {!! Form::nth_frase_editar($frase->codigo, $idioma->codigo, $frase, "<em>No se ha definido la frase en ".$idioma->nombre."</em>") !!}
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Galerías en esta página</h2>

    <h3>Slider principal</h3>
    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group btn-group-sm" role="group">
            {!! Form::nth_img_button_clase("Agregar foto", null, "fa-plus", array("id"=>"btnAddFoto", 'label'=>false, "class"=>"btn-verde qtip-top", "data"=>"data-galeria='homePrincipal' data-galeria-name='Slider principal'")) !!}
        </div>
    </div>

    <h3>Slider secundario</h3>

@stop

@section("scripts")
    <script type="text/javascript">
        function openFormFrase(tipo, $btn) {
            openLoader();
            var url = "", title = "";
            if (tipo == "create") {
                url = "{{ URL::to('admin/createFraseAjax') }}";
                title = "Traducir frase";
            } else if (tipo == "edit") {
                url = "{{ URL::to('admin/editFraseAjax') }}";
                title = "Modificar frase";
            }
            var id = $btn.data("id");
            var lang = $btn.data("lang");
            $.ajax({
                type    : "POST",
                url     : url,
                data    : {
                    id         : id,
                    lang       : lang,
                    redirectme : "admin/home"
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
                                    var $frm = $("#frmFrase");
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

        function openFormFoto(tipo, $btn) {
            openLoader();
            var url = "", title = "";
            if (tipo == "create") {
                url = "{{ URL::to('admin/createFotoAjax') }}";
                title = "Agregar foto";
            } else if (tipo == "edit") {
                url = "{{ URL::to('admin/editFotoAjax') }}";
                title = "Modificar foto";
            }
            var id = $btn.data("id");
            var lang = $btn.data("lang");
            $.ajax({
                type    : "POST",
                url     : url,
                data    : {
                    id         : id,
                    lang       : lang,
                    redirectme : "admin/home"
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
                                    var $frm = $("#frmFoto");
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
            $("#btnAddFoto").click(function () {
                var $this = $(this);
                openFormFoto("create", $this);
                return false;
            });
        });
    </script>
@stop