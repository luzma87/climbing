@extends('layouts.defaultAdmin')

@section('title', 'Editar programa')

@section('content')

    {!! Form::model($programa, ['id'=>'frmPrograma', 'files' => true, 'method' => 'PATCH', 'route' => array('adminProgramas.update', $programa->codigo)]) !!}
    @include('programas/partials/_form_'.$programa->tipo, ['submit_text' => 'Actualizar programa',
    'grupo' => $grupo, 'nombre' => $nombre, "tipos" => $tipos,
    "lang" => $lang, "frase" => $frase])
    {!! Form::close()  !!}
@stop

@section('scripts')
    <script type="text/javascript">
        var $frm = $("#frmPrograma");

        $frm.validate({
            submitHandler : function (form) {
                openLoader();
                for (var instance in CKEDITOR.instances) {
                    CKEDITOR.instances[instance].updateElement();
                }
                form.submit();
            }
        });

        $("#btnSave").click(function () {
            $frm.submit();
            return false;
        });
    </script>
@stop