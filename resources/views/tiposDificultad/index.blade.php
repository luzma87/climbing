<?php
use App\Frase;
use App\Foto;
use App\Idioma;

?>

@extends('layouts.defaultAdmin')

@section('title', 'Tipos de dificultad')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel-completo" style="padding: 5px">
                <div class="row fila" style="margin-left: 0">
                    <div class="col-md-11 titulo-panel">
                        Tipos de dificultad
                    </div>
                </div>

                <div class="row fila" style="margin-left: 0">
                    <div class="btn-toolbar toolbar">
                        <div class="btn-group">
                            <a href="#" class="btn btn-verde" id="btnCrear">
                                <i class="fa fa-file-o"></i> Crear
                            </a>
                        </div>

                        {{--<div class="btn-group pull-right col-md-3">--}}
                        {{--<div class="input-group">--}}
                        {{--<input type="text" class="form-control input-search" placeholder="Buscar" value="{{ $search }}">--}}
                        {{--<span class="input-group-btn">--}}
                        {{--<a href="#" class="btn btn-verde btn-search">--}}
                        {{--<i class="fa fa-search"></i>&nbsp;--}}
                        {{--</a>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--<!-- /input-group -->--}}
                        {{--</div>--}}
                    </div>
                </div>

                <div class="row fila">
                    <div class="col-md-12">
                        <table class="table table-condensed table-bordered table-striped table-hover verde">
                            <thead>
                                <tr>
                                    <th class="text-white" rowspan="2">#</th>
                                    @foreach($idiomas as $idioma)
                                        <th colspan="2" class="text-white">{{ $idioma->nombre }}</th>
                                    @endforeach
                                    <th rowspan="2" class="colAcciones text-white">Acciones</th>
                                </tr>
                                <tr>
                                    @for ($i = 0; $i < sizeof($idiomas); $i++)
                                        <th class="text-white">Código</th>
                                        <th class="text-white">Descripción</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($tipos as $tipo)
                                    <tr>
                                        <td>{{ $tipo->orden }}</td>
                                        @foreach($idiomas as $idioma)
                                            <?php
                                            $fr = $tipo->frases()->idioma($idioma->codigo)->first();
                                            ?>
                                            <td>{{ $fr->codigo }}</td>
                                            <td>{{ $fr->descripcion }}</td>
                                        @endforeach
                                        <td>
                                            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('adminTiposDificultad.destroy', $tipo->id))) !!}
                                            <div class="btn-group" role="group" aria-label="...">
                                                {!! Form::nth_img_button_clase("Editar", null , "fa-pencil", array('class' => 'btn-edit btn-warning btn-sm', 'label' => false, 'data'=>'data-id="'.$tipo->id.'"')) !!}
                                                {!! Form::nth_img_button_clase("Eliminar", null, "fa-trash-o", array('class' => 'btn-delete btn-sm btn-danger', 'label' => false)) !!}
                                            </div>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="{{ 2*sizeof($idiomas)+2 }}" class="info text-info text-center">
                                            Nada que mostrar
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script type="text/javascript">
        function openForm(tipo, id) {
            openLoader();
            var title = "", url = "";
            if (tipo == "create") {
                title = "Crear tipo de dificultad";
                url = "{{ URL::to('adminTiposDificultad/createAjax') }}";
            } else if (tipo == "edit") {
                title = "Modificar tipo de dificultad";
                url = "{{ URL::to('adminTiposDificultad/editAjax') }}";
            }
            $.ajax({
                type     : "POST",
                url      : url,
                data     : {
                    id : id
                },
                complete : function () {
                    closeLoader();
                },
                success  : function (msg) {
                    bootbox.dialog({
                        title   : title,
                        message : msg,
                        class   : "modal-lg",
                        buttons : {
                            success : {
                                label     : "<i class='fa fa-floppy-o'></i> Guardar",
                                className : "btn-success",
                                callback  : function () {
                                    var $frm = $("#frmTipoDificultad");
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
                error    : function () {
                    bootbox.alert("Ha ocurrido un error interno");
                }
            });
        }

        $(function () {
            $("#btnCrear").click(function () {
                openForm("create");
                return false;
            });
            $(".btn-edit").click(function () {
                openForm("edit", $(this).data("id"));
                return false;
            });
            $(".btn-delete").click(function () {
                var $frm = $(this).parents("form");
                bootbox.confirm("¿Está seguro de querer eliminar este tipo de dificultad?", function (res) {
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