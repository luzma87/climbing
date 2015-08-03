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
                            {!! Form::nth_img_button("Lista", URL::to('frases/index'), "fa-list", array('class' => 'btn-nth')) !!}
                        </div>
                    </div>
                </div>


                <div class="row fila">
                    <div class="col-md-5">

                        {!! Form::open(["id"=>'frmFrase', 'route' => 'frases.store'])  !!}

                        <div class="form-group">
                            {!! Form::nth_select('idioma', "Idioma", $idiomas, $errors) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::nth_textfield('codigo', 'Código', $errors) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::nth_textarea('contenido', 'Contenido', $errors) !!}
                        </div>

                        <div>
                            {!! Form::nth_img_button("Guardar", null, "fa-floppy-o", array('id'=>'btnSave', 'class' => 'btn-nth')) !!}
                        </div>
                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop