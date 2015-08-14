<div class="row">
    <div class="form-group col-md-6 col-md-offset-3">
        {!! Form::nth_textfield('orden', 'Orden', $errors, null, array('value'=>($grupo?$grupo->orden:''), 'class' => 'required')) !!}
    </div>
</div>
@foreach($idiomas as $idioma)
    <?php
    $fr = null;
    if ($grupo) {
        $fr = $grupo->frases()->idioma($idioma->codigo)->first();
    }
    ?>
    <fieldset class="col-md-6">
        <legend class="text-verde">{{ $idioma->nombre }}</legend>
        <div class="form-group">
            {!! Form::nth_textfield('nombre__'.$idioma->codigo, 'Nombre', $errors, null, array('value'=>($fr?$fr->nombre:''),'class' => $idioma->codigo == 'es'?'required':'')) !!}
        </div>
        <div class="form-group">
            {!! Form::nth_textfield('nombreMenu__'.$idioma->codigo, 'Nombre para el Menú', $errors, null, array('value'=>($fr?$fr->nombreMenu:''),'class' => $idioma->codigo == 'es'?'required':'')) !!}
        </div>
    </fieldset>
@endforeach