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
            {!! Form::nth_img_button_clase("Agregar foto", null, "fa-plus", array("id"=>"btnAddFoto", 'label'=>false, "class"=>"btn-verde qtip-top", "data"=>"data-galeria='homePrincipal'")) !!}
        </div>
    </div>

    <h3>Slider secundario</h3>


    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div><!-- /.modal -->
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
                                label     : "<i class='fa fa-flppy-o'></i> Guardar",
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

        function uploadFoto(tipo, $btn) {

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
            $("#btnAddPrincipal").click(function () {
                var $this = $(this);
                openFormFoto("create", $this);
                return false;
            });
        });
    </script>
@stop