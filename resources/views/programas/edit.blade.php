@extends('layouts.defaultAdmin')

@section('title', 'Editar programa')

@section('content')

    {!! Form::model($programa, ['id'=>'frmPrograma', 'files' => true, 'route' => ['adminProgramas.update']]) !!}
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
                form.submit();
            }
        });

        $("#btnSave").click(function () {
            $frm.submit();
            return false;
        });
    </script>
@stop