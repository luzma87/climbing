@extends('layouts.defaultAdmin')

@section('title', 'Actualizar idioma')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel-completo" style="padding: 5px">
                <div class="row fila" style="margin-left: 0">
                    <div class="col-md-11 titulo-panel">
                        Actualizar idioma
                    </div>
                </div>

                <div class="row fila" style="margin-left: 0">
                    <div class="btn-toolbar toolbar">
                        <div class="btn-group">
                            {!! Form::nth_img_button("Lista", action('IdiomasController@index'), "fa-list", array('class' => 'btn-nth')) !!}
                        </div>
                    </div>
                </div>


                <div class="row fila">
                    <div class="col-md-5">
                        {!! Form::model($idioma, ['id'=>'frmIdioma', 'files' => true, 'method' => 'PATCH', 'route' => array('adminIdiomas.update', $idioma->codigo)]) !!}

                        @include('idiomas/partials/_form', ['submit_text' => 'Actualizar idioma'])

                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script type="text/javascript">
        var $frm = $("#frmIdioma");

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