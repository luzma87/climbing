<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>

@extends('layouts.defaultAdmin')

@section('title', 'Frases')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel-completo" style="padding: 5px">
                <div class="row fila" style="margin-left: 0">
                    <div class="col-md-11 titulo-panel">
                        Frases
                    </div>
                </div>

                <div class="row fila" style="margin-left: 0">
                    <div class="btn-toolbar toolbar">
                        <div class="btn-group">
                            <a href="{{ URL::to('adminFrases/create') }}" class="btn btn-verde btnCrear">
                                <i class="fa fa-file-o"></i> Crear
                            </a>
                        </div>
                        <div class="btn-group">
                            {!! Form::nth_select_default_noLbl('idioma', $idiomas, '-- Todos --', array('value'=>$idioma,'id'=>'idioma', 'class'=>'form-control')) !!}
                        </div>

                        <div class="btn-group pull-right col-md-3">
                            <div class="input-group">
                                <input type="text" class="form-control input-search" placeholder="Buscar" value="{{ $search }}">
                                    <span class="input-group-btn">
                                        <a href="#" class="btn btn-verde btn-search">
                                            <i class="fa fa-search"></i>&nbsp;
                                        </a>
                                    </span>
                            </div>
                            <!-- /input-group -->
                        </div>
                    </div>
                </div>

                <div class="row fila">
                    <div class="col-md-12">
                        <table class="table table-condensed table-bordered table-striped table-hover verde">
                            <thead>
                                <tr>
                                    <th class="text-white">Idioma</th>
                                    <th class="text-white">Página</th>
                                    <th class="text-white">Código</th>
                                    <th class="text-white">Contenido</th>
                                    <th class="colAcciones text-white">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($frases as $frase)
                                    <tr>
                                        <td>{{ Idioma::find($frase->idioma)->nombre }}</td>
                                        <td>{{ $frase->pagina }}</td>
                                        <td>{{ $frase->codigo }}</td>
                                        <td>{{ $frase->contenido }}</td>
                                        <td>
                                            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('adminFrases.destroy', $frase->id))) !!}
                                            <div class="btn-group" role="group" aria-label="...">
                                                {!! Form::nth_img_button_clase("Editar", route("adminFrases.edit", $frase->id) , "fa-pencil", array('class' => 'btn-warning btn-sm', 'label' => false)) !!}
                                                {!! Form::nth_img_button_clase("Eliminar", null, "fa-trash-o", array('class' => 'btn-delete btn-sm btn-danger', 'label' => false)) !!}
                                            </div>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="info text-info text-center">Nada que mostrar</td>
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
        function doSearch() {
            openLoader("Buscando...");
            var url = "{{ URL::action('FrasesController@index') }}";
            url += "?lang=" + $("#idioma").val();
            url += "&search=" + $.trim($(".input-search").val());
            location.href = url;
        }
        $(function () {
            $("#idioma").change(function () {
                doSearch();
            });
            $(".btn-delete").click(function () {
                var $frm = $(this).parents("form");
                bootbox.confirm("¿Está seguro de querer eliminar esta frase?", function (res) {
                    if (res) {
                        openLoader("Eliminando");
                        $frm.submit();
                    }
                });
                return false;
            });
            $(".input-search").keyup(function (ev) {
                if (ev.keyCode == 13) {
                    doSearch();
                }
            });
            $(".btn-search").click(function () {
                doSearch();
            });
        });
    </script>
@stop