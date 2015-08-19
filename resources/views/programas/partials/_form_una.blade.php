<h1 class="text-center">{{ $nombre }}</h1>

<input type="hidden" name="grupo_programa_id" value="{{ $grupo->id }}"/>
<input type="hidden" name="tipo" value="una"/>

<fieldset>
    <legend class="text-verde">Campos independientes del idioma</legend>
    @if($codEditable)
        {!! Form::nth_textfield('codigo', 'Código único (para identificarlo con su galería de fotos)', $errors, null, array('class' => 'required')) !!}
    @else
        {!! Form::nth_textfield('codigo', 'Código único (para identificarlo con su galería de fotos)', $errors, null, array('class' => 'required', 'disabled'=>true)) !!}
        <input type="hidden" name="codigo" value="{{ $programa->codigo }}"/>
    @endif
    {!! Form::nth_textfield('orden', 'Orden (dentro del grupo de programas)', $errors, null, array('class' => 'required')) !!}
    {!! Form::nth_select('tipo_dificultad_id', 'Graduación de técnica',  $tipos, $errors, null, array('class' => 'required')) !!}
    {!! Form::nth_file('foto', 'Foto', $errors, null) !!}
    @if($programa && $programa->foto)
        <img src="{!! URL::asset($programa->foto) !!}" alt="{{ getFrasePrograma($frase, 'nombre') }}" class="img-thumbnail">
    @endif
</fieldset>

<fieldset>
    <legend class="text-verde">Campos dependientes del idioma ({{ $lang }})</legend>
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'resumen', 'Resumen', $errors) !!}
    {!! Form::nth_traducir_frase('textfield', $frase, $fraseEs, $lang, 'nombre', 'Nombre', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'descripcion', 'Descripción', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'itinerario', 'Itinerario', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'recomendaciones', 'Recomendaciones', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'requisitos', 'Requisitos', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'llevar', 'Qué llevar', $errors) !!}
    {!! Form::nth_traducir_frase('file', $frase, $fraseEs, $lang, 'llevarFile', 'Pdf con lista de equipo anexo', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'incluye', 'Qué incluye', $errors) !!}
    {!! Form::nth_traducir_frase('textarea', $frase, $fraseEs, $lang, 'noIncluye', 'No incluye', $errors) !!}
</fieldset>

<div style="margin-bottom: 15px;">
    {!! Form::nth_img_button($submit_text, null, "fa-floppy-o", array('id'=>'btnSave', 'class' => 'btn-nth')) !!}
</div>