{!! Form::nth_textfield('codigo', 'Código', $errors, null, array('class' => 'required')) !!}
{!! Form::nth_textfield('nombre', 'Nombre', $errors, null, array('class' => 'required')) !!}
{!! Form::nth_file('bandera', 'Bandera', $errors, null) !!}

<div>
    {!! Form::nth_img_button($submit_text, null, "fa-floppy-o", array('id'=>'btnSave', 'class' => 'btn-nth')) !!}
</div>