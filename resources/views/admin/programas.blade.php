@extends('layouts.defaultAdmin')

@section('title', 'Admin: Nuestros Programas')

@section('content')

    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group btn-group-sm" role="group">
            {!! Form::nth_img_button_clase("Agregar grupo de programa", null, "fa-plus", array("id"=>"btnAddGrupo",  "class"=>"btn-verde qtip-top")) !!}
        </div>
    </div>

    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading" role="tab" id="headingOne">--}}
    {{--<h4 class="panel-title">--}}
    {{--<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
    {{--Collapsible Group Item #1--}}
    {{--</a>--}}
    {{--</h4>--}}
    {{--</div>--}}
    {{--<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">--}}
    {{--<div class="panel-body">--}}
    {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3--}}
    {{--wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum--}}
    {{--eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla--}}
    {{--assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt--}}
    {{--sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer--}}
    {{--farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus--}}
    {{--labore sustainable VHS.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

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
                type    : "POST",
                url     : url,
                data    : {
                    id : id
                },
                success : function (msg) {
                    closeLoader();
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
                error   : function () {

                }
            });
        }

        $(function () {
            $("#btnAddGrupo").click(function () {
                openFormGrupo("create");
                return false;
            });
        });
    </script>

@stop