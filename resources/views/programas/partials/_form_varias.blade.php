<h1 class="text-center">{{ $nombre }}</h1>

<input type="hidden" name="grupo_programa_id" value="{{ $grupo->id }}"/>
<input type="hidden" name="tipo_dificultad_id" value="2"/>
<input type="hidden" name="tipo" value="varias"/>

{!! Form::nth_img_button("Modificar etiquetas", URL::to('adminProgramas/editEtiquetas/varias'), "fa-list", array('class' => 'btn-info')) !!}

<fieldset>
    <legend class="text-verde">Campos independientes del idioma</legend>
    @if($codEditable)
        {!! Form::nth_textfield('codigo', 'Código único (para identificarlo con su galería de fotos)', $errors, null, array('class' => 'required')) !!}
    @else
        {!! Form::nth_textfield('codigo', 'Código único (para identificarlo con su galería de fotos)', $errors, null, array('class' => 'required', 'disabled'=>true)) !!}
        <input type="hidden" name="codigo" value="{{ $programa->codigo }}"/>
    @endif
    {!! Form::nth_textfield('orden', 'Orden (dentro del grupo de programas)', $errors, null, array('class' => 'required')) !!}
</fieldset>

<fieldset>
    <legend class="text-verde">Campos dependientes del idioma ({{ $lang }})</legend>
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'resumen', 'Resumen', $errors) !!}
    {!! Form::nth_traducir_frase('textfield', $frase, $fraseEs, $lang, 'nombre', 'Nombre', $errors) !!}
</fieldset>

<fieldset>
    <legend class="text-verde">Partes/Días ({{ $lang }})</legend>
    @if($programa)
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-plus-circle"></i>
                    Nueva parte/día
                </h3>
            </div>
            <div class="panel-body bg-success">
                {!! Form::model(new App\PartePrograma(), ['id'=>'frmPartePrograma', 'files' => true, 'route' => ['adminProgramas.store']]) !!}
                @include('partesProgramas/partials/_form', ['submit_text' => 'Crear parte/día??', "fraseEs" => null, "lang" => "es", "parte" => null, "frase"=>null, "tipos"=>$tipos])
                {!! Form::close()  !!}
            </div>
        </div>

        @foreach($programa->partes as $index => $parte)
            <?php
            $nombre = $parte->frases()->idioma($lang)->first()->nombre;
            ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading{{ $index }}">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 class="panel-title">
                                <a class="clickable" role="button" data-toggle="collapse" href="#collapse{{ $index }}" aria-expanded="true" aria-controls="collapse{{ $index }}">
                                    <i class="fa fa-caret-down"></i>
                                    {{ $parte->orden }}.- {{ $nombre }}
                                </a>
                            </h4>
                        </div>
                        <div class="col-md-2">
                            {!! Form::open(array('class' => 'form-inline pull-right', 'method' => 'DELETE', 'route' => array('adminGruposPrograma.destroy', $grupo->id))) !!}
                            <div class="btn-group btn-group-xs" role="group">
                                {!! Form::nth_img_button_clase("Editar", null , "fa-pencil", array('class' => 'btn-edit-grupo btn-warning btn-sm', 'label' => false, 'data' => 'data-id="'.$grupo->id.'"')) !!}
                                {!! Form::nth_img_button_clase("Eliminar", null, "fa-trash-o", array('class' => 'btn-delete-grupo btn-sm btn-danger', 'label' => false)) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div id="collapse{{ $index }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $index }}">
                    <div class="panel-body">


                    </div>
                </div>
            </div>
        @endforeach

    @else
        <div class="alert alert-info">
            <i class="fa fa-exclamation-triangle"></i> Primero guarde el programa para crear sus partes o días
        </div>
    @endif
</fieldset>

<div style="margin-top: 15px; margin-bottom: 15px;">
    {!! Form::nth_img_button($submit_text, null, "fa-floppy-o", array('id'=>'btnSave', 'class' => 'btn-nth')) !!}
</div>

<script type="text/javascript">
    var redirectme = "adminPrograma"
    function openFormPartePrograma(tipo, $btn, url) {
        openLoader();
        var title = "", url = "";
        if (tipo == "create") {
            title = "Crear frases";
            url = "{{ URL::to('adminPartesPrograma/createAjax') }}";
        } else if (tipo == "edit") {
            title = "Modificar frases";
            url = "{{ URL::to('adminPartesPrograma/editAjax') }}";
        }
        var $tr = $btn.parents("tr");
        var id = $tr.data("id");
        var lang = $tr.data("lang");
        var foto = $tr.data("foto");
        $.ajax({
            type    : "POST",
            url     : url,
            data    : {
                id         : id,
                lang       : lang,
                foto       : foto,
                redirectme : urlRedirect
            },
            success : function (msg) {
                closeLoader();
                bootbox.dialog({
                    title   : title,
                    message : msg,
                    buttons : {
                        success : {
                            label     : "<i class='fa fa-floppy-o'></i> Guardar",
                            className : "btn-success",
                            callback  : function () {
                                var $frm = $("#frmFraseFoto");
                                $frm.submit();
                                return false;
                            }
                        },
                        danger  : {
                            label     : "Cancelar",
                            className : "btn-default",
                            callback  : function () {
                            }
                        }
                    }
                });
            },
            error   : function () {

            }
        });
    }

    $(function () {
        $(".btn-create-parte-programa").click(function () {
            openFormPartePrograma("create", $(this));
            return false;
        });
    });
</script>