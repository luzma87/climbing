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
    {!! Form::nth_traducir_frase('textfield', $frase, $fraseEs, $lang, 'nombre', 'Nombre del programa', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'resumen', 'Resumen del programa', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'logistica', 'Logística del programa', $errors) !!}
    {!! Form::nth_traducir_frase('file', $frase, $fraseEs, $lang, 'llevarFile', 'Pdf con lista de equipo anexo', $errors) !!}
</fieldset>

<div style="margin-top: 15px; margin-bottom: 15px;">
    {!! Form::nth_img_button($submit_text, null, "fa-floppy-o", array('id'=>'btnSave', 'class' => 'btn-nth')) !!}
</div>