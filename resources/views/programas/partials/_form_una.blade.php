<h1 class="text-center">{{ $nombre }}</h1>

<input type="hidden" name="grupo_programa_id" value="{{ $grupo->id }}"/>
<input type="hidden" name="tipo" value="una"/>

{!! Form::nth_img_button("Modificar etiquetas", URL::to('adminProgramas/editEtiquetas/una'), "fa-list", array('class' => 'btn-info')) !!}

<fieldset>
    <legend class="text-verde">Campos independientes del idioma</legend>
    @if($codEditable)
        {!! Form::nth_textfield('codigo', 'Código único (para identificarlo con su galería de fotos)', $errors, null, array('class' => 'required')) !!}
    @else
        {!! Form::nth_textfield('codigo', 'Código único (para identificarlo con su galería de fotos)', $errors, null, array('class' => 'required', 'disabled'=>true)) !!}
        <input type="hidden" name="codigo" value="{{ $programa->codigo }}"/>
    @endif
    {!! Form::nth_textfield('orden', 'Orden (dentro del grupo de programas)', $errors, null, array('class' => 'required')) !!}
    {!! Form::nth_select('tipo_dificultad_id', getFrase('programas_una_graduacionTecnica', $lang, 'Graduación técnica'),  $tipos, $errors, null, array('class' => 'required')) !!}
    {!! Form::nth_file('foto', 'Foto', $errors, null) !!}
    @if($programa && $programa->foto)
        <img src="{!! URL::asset($programa->foto) !!}" alt="{!! getFrasePrograma($frase, 'nombre') !!}" class="img-thumbnail">
    @endif
</fieldset>

<fieldset>
    <legend class="text-verde">Campos dependientes del idioma ({{ $lang }})</legend>
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'resumen', 'Resumen', $errors) !!}
    {!! Form::nth_traducir_frase('textfield', $frase, $fraseEs, $lang, 'nombre', 'Nombre', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'descripcion', 'programas_una_descripcion', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'itinerario', 'programas_una_itinerario', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'recomendaciones', 'programas_una_recomendaciones', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'requisitos', 'programas_una_requisitos', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'llevar', 'programas_una_llevar', $errors) !!}
    {!! Form::nth_traducir_frase('file', $frase, $fraseEs, $lang, 'llevarFile', 'Pdf con lista de equipo anexo', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'incluye', 'programas_una_incluye', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'noIncluye', 'programas_una_noIncluye', $errors) !!}
</fieldset>

<div style="margin-bottom: 15px;">
    {!! Form::nth_img_button($submit_text, null, "fa-floppy-o", array('id'=>'btnSave', 'class' => 'btn-nth')) !!}
</div>