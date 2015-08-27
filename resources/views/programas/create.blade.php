@extends('layouts.defaultAdmin')

@section('title', 'Nuevo programa')

@section('content')

    {!! Form::model(new App\Programa, ['id'=>'frmPrograma', 'files' => true, 'route' => ['adminProgramas.store']]) !!}
    @include('programas/partials/_form_'.$tipo, ['submit_text' => 'Crear programa', "fraseEs" => null,
    'grupo' => $grupo, 'nombre'=>$nombre, "tipos" => $tipos, "codEditable" => true, "programa" => null,
     "lang" => "es", "frase" => null])
    {!! Form::close()  !!}
    @if($tipo == 'varias')
        @include('programas/partials/_form_partes', ['programa' => null, 'lang'=>"es"])
    @endif
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