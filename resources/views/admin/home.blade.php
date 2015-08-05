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
    <h3>Slider secundario</h3>
@stop

@section("scripts")
    <script type="text/javascript">
        $(function () {
            $(".btn-edit").click(function () {
                var id = $(this).data("id");
                var url = "{{ URL::to('admin/editarFrase') }}/" + id;
                console.log(url);
                return false;
            });
            $(".btn-create").click(function () {
                var id = $(this).data("id");
                var url = "{{ URL::to('admin/createAjax') }}";
                $.ajax({
                    type    : "POST",
                    url     : url,
                    data    : {
                        id : id
                    },
                    success : function (msg) {
                        bootbox.dialog({
                            title   : "Custom title",
                            message : msg,
                            buttons : {
                                success : {
                                    label     : "<i class='fa fa-flppy-o'></i> Guardar",
                                    className : "btn-success",
                                    callback  : function () {
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

                return false;
            });
        });
    </script>
@stop