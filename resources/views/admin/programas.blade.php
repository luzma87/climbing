@extends('layouts.defaultAdmin')

@section('title', 'Admin: Nuestros Programas')

@section('content')

    <div class="btn-toolbar" role="toolbar" style="margin-bottom: 10px;">
        <div class="btn-group btn-group-sm" role="group">
            {!! Form::nth_img_button_clase("Agregar grupo de programa", null, "fa-plus", array("id"=>"btnAddGrupo",  "class"=>"btn-verde qtip-top")) !!}
        </div>
    </div>

    @foreach($grupos as $index => $grupo)
        <?php
        $nombre = $grupo->frases()->idioma("es")->first()->nombre;
        ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading{{ $index }}">
                <div class="row">
                    <div class="col-md-10">
                        <h4 class="panel-title">
                            <a class="clickable" role="button" data-toggle="collapse" href="#collapse{{ $index }}" aria-expanded="true" aria-controls="collapse{{ $index }}">
                                <i class="fa fa-caret-down"></i>
                                {{ $nombre }}
                            </a>
                        </h4>
                    </div>
                    <div class="col-md-2">
                        {!! Form::open(array('class' => 'form-inline pull-right', 'method' => 'DELETE', 'route' => array('gruposPrograma.destroy', $grupo->id))) !!}
                        <div class="btn-group btn-group-xs" role="group">
                            {!! Form::nth_img_button_clase("Editar", null , "fa-pencil", array('class' => 'btn-edit-grupo btn-warning btn-sm', 'label' => false, 'data' => 'data-id="'.$grupo->id.'"')) !!}
                            {!! Form::nth_img_button_clase("Eliminar", null, "fa-trash-o", array('class' => 'btn-delete-grupo btn-sm btn-danger', 'label' => false)) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div id="collapse{{ $index }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $index }}">
                <div class="panel-body">
                    <div class="btn-toolbar" role="toolbar" style="margin-bottom: 10px;">
                        <div class="btn-group btn-group-sm" role="group">
                            {!! Form::nth_img_button_clase("Agregar programa", null, "fa-plus", array('label' => false, "class"=>"btn-add-programa btn-verde qtip-top", "data" => "data-id='".$grupo->id."' data-nombre='".$nombre."'")) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <script type="text/javascript">
        function openFormGrupo(tipo, id) {
            openLoader();
            var title = "", url = "";
            if (tipo == "create") {
                title = "Crear grupo de programas";
                url = "{{ URL::to('gruposPrograma/createAjax') }}";
            } else if (tipo == "edit") {
                title = "Modificar grupo de programas";
                url = "{{ URL::to('gruposPrograma/editAjax') }}";
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
                                    var $frm = $("#frmGrupoPrograma");
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
            $("#btnAddGrupo").click(function () {
                openFormGrupo("create");
                return false;
            });

            $(".clickable").click(function () {
                var $this = $(this);
                var $i = $this.find("i");
                $i.toggleClass("fa-rotate-180");
            });

            $(".btn-edit-grupo").click(function () {
                openFormGrupo("edit", $(this).data("id"));
                return false;
            });

            $(".btn-delete-grupo").click(function () {
                var $frm = $(this).parents("form");
                bootbox.confirm("¿Está seguro de querer eliminar este grupo de programas? Se eliminarán también todos sus programas", function (res) {
                    if (res) {
                        openLoader("Eliminando");
                        $frm.submit();
                    }
                });
                return false;
            });

            $(".btn-add-programa").click(function () {
                var $this = $(this);
                var id = $this.data("id");
                var nombre = $this.data("nombre");

                bootbox.dialog({
                    title   : "Agregar programa al grupo <span class='text-verde'>" + nombre + "</span>",
                    message : "<p>¿Desea crear un programa de una sola parte o día, o uno de varias partes/días?</p>",
                    buttons : {
                        una    : {
                            label     : "<i class='fa fa-stop'></i> Una parte/día",
                            className : "btn-success",
                            callback  : function () {
                                location.href = "{{ URL::to('programas/create') }}/" + id + "/una";
                            }
                        },
                        varias : {
                            label     : "<i class='fa fa-th-large'></i> Varias partes/días",
                            className : "btn-info",
                            callback  : function () {
                                location.href = "{{ URL::to('programas/create') }}/" + id + "/varias";
                            }
                        },
                        cancel : {
                            label     : "Cancelar",
                            className : "btn-default",
                            callback  : function () {

                            }
                        }
                    }
                });
                return false;
            });

        });
    </script>

@stop