<div class="form-group">
    {!! Form::nth_textfield('codigo', 'Código', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_textfield('nombre', 'Nombre', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_file('bandera', 'Bandera', $errors, null) !!}
</div>

<div>
    {!! Form::nth_img_button($submit_text, null, "fa-floppy-o", array('id'=>'btnSave', 'class' => 'btn-nth')) !!}
</div>