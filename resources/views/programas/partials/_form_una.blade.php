<input type="hidden" name="tipo" value="U"/>

<h1 class="text-center">{{ $nombre }}</h1>

<div class="form-group">
    {!! Form::nth_textarea('resumen', 'Resumen', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_textfield('nombre', 'Nombre', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_select('tipo_dificultad', 'Graduación de técnica', $tipos, $errors, null, array()) !!}
</div>
<div class="form-group">
    {!! Form::nth_file('foto', 'Foto', $errors, null) !!}
</div>
<div class="form-group">
    {!! Form::nth_textarea('descripcion', 'Descripción', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_textarea('itinerario', 'Itinerario', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_textarea('recomendaciones', 'Recomendaciones', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_textarea('requisitos', 'Requisitos', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_textarea('llevar', 'Qué llevar', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_file('llevarFile', 'Pdf con lista de equipo anexo', $errors, null) !!}
</div>
<div class="form-group">
    {!! Form::nth_textarea('incluye', 'Qué incluye', $errors, null, array('class' => 'required')) !!}
</div>
<div class="form-group">
    {!! Form::nth_textarea('noIncluye', 'No incluye', $errors, null, array('class' => 'required')) !!}
</div>