orden               -> partePrograma
foto                -> partePrograma
tipo_dificultad_id  -> partePrograma
idioma              -> frasePartePrograma
nombre              -> frasePartePrograma
resumen             -> frasePartePrograma
descripcion         -> frasePartePrograma

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