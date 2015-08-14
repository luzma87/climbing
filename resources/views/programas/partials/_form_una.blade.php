<input type="hidden" name="tipo" value="U"/>

<h1 class="text-center">{{ $nombre }}</h1>

<div class="form-group">
    {!! Form::nth_textarea('resumen', 'Resumen', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_textfield('nombre', 'Nombre', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_textfield('nombre', 'Nombre', $errors, null, array('class' => 'required')) !!}
</div>
