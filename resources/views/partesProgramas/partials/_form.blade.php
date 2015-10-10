<input type="hidden" name="redirectme" value="{{ $redirectme }}"/>
<input type="hidden" name="programa_id" value="{{ $programa }}"/>
<fieldset>
    <legend class="text-verde">
        <small>Campos independientes del idioma</small>
    </legend>
    {!! Form::nth_textfield('orden', 'Orden (dentro del grupo de programas)', $errors, null, array('class' => 'required', 'value'=>($parte?$parte->orden:null))) !!}
    {!! Form::nth_select('tipo_dificultad_id', getFrase('programas_varias_graduacionTecnica', $lang, 'Graduación técnica'),  $tipos, $errors, null, array('class' => 'required', 'value'=>($parte?$parte->tipoDificultad_id:null))) !!}
    {!! Form::nth_file('foto', 'Foto', $errors, null) !!}
    @if($parte && $parte->foto)
        <img src="{!! URL::asset($parte->foto) !!}" alt="{!! getFrasePrograma($frase, 'nombre') !!}" class="img-thumbnail">
    @endif
</fieldset>

<fieldset>
    <legend class="text-verde">
        <small>Campos dependientes del idioma ({{ $lang }})</small>
    </legend>
    {!! Form::nth_traducir_frase('textfield', $frase, $fraseEs, $lang, 'nombre', 'Nombre', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'resumen', 'Resumen', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'descripcion', 'programas_varias_descripcion', $errors) !!}
</fieldset>
<div style="margin-bottom: 15px;">
    {!! Form::nth_img_button($submit_text, null, "fa-floppy-o", array('id'=>'btnSaveParte', 'data'=>'data-id="'.$submit_id.'"', 'class' => 'btn-sm btnSaveParte')) !!}
</div>

<script type="text/javascript">
    var $frmPartePrograma = $(".frmPartePrograma<?=$submit_id?>");
    $frmPartePrograma.validate({
        submitHandler : function (form) {
            openLoader();
            for (var instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }
            form.submit();
        }
    });
</script>