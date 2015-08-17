@extends('layouts.defaultAdmin')

@section('title', 'Nuevo usuario')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel-completo" style="padding: 5px">
                <div class="row fila" style="margin-left: 0">
                    <div class="col-md-11 titulo-panel">
                        Nuevo usuario
                    </div>
                </div>

                <div class="row fila" style="margin-left: 0">
                    <div class="btn-toolbar toolbar">
                        <div class="btn-group">
                            {!! Form::nth_img_button("Lista", action('UsersController@index'), "fa-list", array('class' => 'btn-nth')) !!}
                        </div>
                    </div>
                </div>


                <div class="row fila">
                    <div class="col-md-5">

                        {!! Form::model(new App\User, ['id'=>'frmUser', 'files' => true, 'route' => ['adminUsers.store']]) !!}

                        @include('users/partials/_form', ['submit_text' => 'Crear usuario'])

                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script type="text/javascript">
        var $frm = $("#frmUser");

        $frm.validate({
            submitHandler : function (form) {
                openLoader();
                form.submit();
            }
        });

        $("#btnSave").click(function () {
            $frm.submit();
            return false;
        });
    </script>
@stop