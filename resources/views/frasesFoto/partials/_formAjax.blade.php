<input type="hidden" name="idioma" value="{{ $idioma }}"/>
<input type="hidden" name="foto_id" value="{{ $foto }}"/>
<input type="hidden" name="redirectme" value="{{ $redirectme }}"/>

<div class="form-group">
    {!! Form::nth_textfield('titulo', 'Título', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_textarea('descripcion', 'Descripción', $errors, null, array('class' => 'required')) !!}
</div>
