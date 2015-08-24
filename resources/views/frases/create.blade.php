@extends('layouts.defaultAdmin')

@section('title', 'Nueva frase')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel-completo" style="padding: 5px">
                <div class="row fila" style="margin-left: 0">
                    <div class="col-md-11 titulo-panel">
                        Nueva frase
                    </div>
                </div>

                <div class="row fila" style="margin-left: 0">
                    <div class="btn-toolbar toolbar">
                        <div class="btn-group">
                            {!! Form::nth_img_button("Lista", action('FrasesController@index'), "fa-list", array('class' => 'btn-nth')) !!}
                        </div>
                    </div>
                </div>


                <div class="row fila">
                    <div class="col-md-12">

                        {!! Form::model(new App\Frase, ['id'=>'frmFrase', 'route' => ['adminFrases.store']]) !!}
                        {{--{!! Form::open(["id"=>'frmFrase', 'route' => 'frases.store'])  !!}--}}

                        @include('frases/partials/_form', ['submit_text' => 'Crear frase', "frase"=>null])

                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script type="text/javascript">
        var $frm = $("#frmFrase");

        $frm.validate({
            submitHandler : function (form) {
                openLoader();
                for (var instance in CKEDITOR.instances) {
                    CKEDITOR.instances[instance].updateElement();
                }
                form.submit();
            },
            rules         : {
                codigo : {
                    remote : {
                        url  : "{{ URL::to('adminFrases/validarUniqueCodigoAjax') }}",
                        type : "post"
                    }
                }
            },
            messages      : {
                codigo : {
                    remote : "Este código ya está siendo utilizado, por favor utiliza otro"
                }
            }
        });

        $("#btnSave").click(function () {
            $frm.submit();
            return false;
        });
    </script>
@stop