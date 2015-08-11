<div class="form-group">
    {!! Form::nth_textfield('name', 'Nombre', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_textfield('email', 'E-mail', $errors, null, array('class' => 'required', 'email' => true)) !!}
</div>
<div class="form-group">
    {!! Form::nth_passfield('password', 'Contraseña', $errors, null, array('class' => 'required')) !!}
</div>

<div>
    {!! Form::nth_img_button($submit_text, null, "fa-floppy-o", array('id'=>'btnSave', 'class' => 'btn-nth')) !!}
</div>