<div class="form-group">
    {!! Form::nth_select('idioma', "Idioma", $idiomas, $errors) !!}
</div>
<div class="form-group">
    {!! Form::nth_textfield('pagina', 'Página', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_textfield('codigo', 'Código', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_textarea('contenido', 'Contenido', $errors, null, array('class' => 'required')) !!}
</div>

<div>
    {!! Form::nth_img_button($submit_text, null, "fa-floppy-o", array('id'=>'btnSave', 'class' => 'btn-nth')) !!}
</div>