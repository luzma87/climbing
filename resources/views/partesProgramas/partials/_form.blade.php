<fieldset>
    <legend class="text-verde">
        <small>Campos independientes del idioma</small>
    </legend>
    {!! Form::nth_textfield('orden', 'Orden (dentro del grupo de programas)', $errors, null, array('class' => 'required')) !!}
    {!! Form::nth_select('tipo_dificultad_id', getFrase('programas_varias_graduacionTecnica', $lang, 'Graduación técnica'),  $tipos, $errors, null, array('class' => 'required')) !!}
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
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'descripcion', 'programas_una_descripcion', $errors) !!}
</fieldset>
LUZ
<div style="margin-bottom: 15px;">
    {!! Form::nth_img_button($submit_text, null, "fa-floppy-o", array('id'=>'btnSave', 'class' => 'btn-sm')) !!}
</div>