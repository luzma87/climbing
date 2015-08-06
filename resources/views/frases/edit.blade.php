@extends('layouts.defaultAdmin')

@section('title', 'Actualizar frase')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel-completo" style="padding: 5px">
                <div class="row fila" style="margin-left: 0">
                    <div class="col-md-11 titulo-panel">
                        Actualizar frase
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
                    <div class="col-md-5">

                        {!! Form::model($frase, ['id'=>'frmFrase', 'method' => 'PATCH', 'route' => array('frases.update', $frase->id)]) !!}
                        {{--{!! Form::open(["id"=>'frmFrase', 'route' => 'frases.store'])  !!}--}}

                        @include('frases/partials/_form', ['submit_text' => 'Actualizar frase'])

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

        $frm.validate();

        $("#btnSave").click(function () {
            openLoader();
//            if ($frm.valid()) {
//                $frm.submit();
//            }
            $frm.submit();
            return false;
        });
    </script>
@stop