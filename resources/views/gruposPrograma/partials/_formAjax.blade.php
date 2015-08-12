@foreach($idiomas as $idioma)
    <fieldset class="col-md-6">
        <legend class="text-verde">{{ $idioma->nombre }}</legend>
        <div class="form-group">
            {!! Form::nth_textfield('nombre_'.$idioma->codigo, 'Nombre', $errors, null, array('class' => 'required')) !!}
        </div>
        <div class="form-group">
            {!! Form::nth_textfield('nombreMenu_'.$idioma->codigo, 'Nombre para el Menú', $errors, null, array('class' => 'required')) !!}
        </div>
    </fieldset>
@endforeach