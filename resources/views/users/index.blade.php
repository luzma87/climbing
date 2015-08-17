@extends('layouts.defaultAdmin')

@section('title', 'Usuarios')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel-completo" style="padding: 5px">
                <div class="row fila" style="margin-left: 0">
                    <div class="col-md-11 titulo-panel">
                        Usuarios
                    </div>
                </div>

                <div class="row fila" style="margin-left: 0">
                    <div class="btn-toolbar toolbar">
                        <div class="btn-group">
                            <a href="{{ URL::to('adminUsers/create') }}" class="btn btn-verde btnCrear">
                                <i class="fa fa-file-o"></i> Crear
                            </a>
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
                                    <th class="text-white">Nombre</th>
                                    <th class="text-white">E-mail</th>
                                    {{--<th class="text-white">Contraseña</th>--}}
                                    <th class="colAcciones text-white">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
{{--                                        <td>{{ $user->password ? 'Sí' : 'No (no puede ingresar)' }}</td>--}}
                                        <td>
                                            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('adminUsers.destroy', $user->email))) !!}
                                            <div class="btn-group" role="group" aria-label="...">
                                                {!! Form::nth_img_button_clase("Editar", route("adminUsers.edit", $user->email) , "fa-pencil", array('class' => 'btn-warning btn-sm qtip-top', 'label' => false)) !!}
                                                {!! Form::nth_img_button_clase("Eliminar", null, "fa-trash-o", array('class' => 'btn-delete btn-sm btn-danger qtip-top', 'label' => false)) !!}
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
            var url = "{{ URL::action('UsersController@index') }}";
            url += "&search=" + $.trim($(".input-search").val());
            location.href = url;
        }
        $(function () {
            $(".btn-delete").click(function () {
                var $frm = $(this).parents("form");
                bootbox.confirm("¿Está seguro de querer eliminar este usuario?", function (res) {
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