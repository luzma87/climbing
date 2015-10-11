@extends('layouts.defaultAdmin')

@section('title', 'Editar programa')

@section('content')
    <style type="text/css">
        .collapse {
            padding : 5px;
        }

        .collapse.border {
            border : solid 1px #2F4050;
        }
    </style>

    <div class="row">
        <div class="col-md-1">
            <label for="idioma">Idioma</label>
        </div>
        <div class="col-md-2">
            {!! Form::select("idioma", $idiomas, $lang, array("id" => "idioma", "class" => "form-control")) !!}
        </div>
    </div>

    {!! Form::model($programa, ['id'=>'frmPrograma', 'files' => true, 'method' => 'PATCH', 'route' => array('adminProgramas.update', $programa->codigo)]) !!}
    <input type="hidden" name="redirectme" value="{{'adminProgramas/edit/'.$programa->codigo.'/'.$lang}}"/>
    @include('programas/partials/_form_'.$programa->tipo, ['submit_text' => 'Actualizar programa', "fraseEs" => $fraseEs,
    'grupo' => $grupo, 'nombre' => $nombre, "tipos" => $tipos, "codEditable" => false,
    "lang" => $lang, "frase" => $frase])
    {!! Form::close()  !!}
    @if($programa->tipo == 'varias')
        @include('programas/partials/_form_partes', ['programa' => $programa, 'lang'=>$lang])
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

        $("#idioma").change(function () {
            openLoader();
            location.href = "{{ URL::to("adminProgramas/edit/".$programa->codigo) }}/" + $(this).val();
        });

        $('.collapsible').click(function () {
            var $this = $(this);
            var $i = $this.find("i");
            $i.toggleClass("fa-rotate-180");
        });

        $("#btnSave").click(function () {
            $frm.submit();
            return false;
        });

        $(".btnSaveParte").click(function () {
            var id = $(this).data("id");
            var $thisFrm = $(".frmPartePrograma" + id);
            $thisFrm.submit();
            return false;
        });
    </script>
@stop