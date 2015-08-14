<div class="row">
    <div class="form-group col-md-6 col-md-offset-3">
        {!! Form::nth_textfield('orden', 'Orden', $errors, null, array('value'=>($tipo?$tipo->orden:''), 'class' => 'required')) !!}
    </div>
</div>

@foreach($idiomas as $idioma)
    <?php
    $fr = null;
    if ($tipo) {
        $fr = $tipo->frases()->idioma($idioma->codigo)->first();
    }
    ?>
    <fieldset class="col-md-6">
        <legend class="text-verde">{{ $idioma->nombre }}</legend>
        <div class="form-group">
            {!! Form::nth_textfield('codigo__'.$idioma->codigo, 'Código', $errors, null, array('value'=>($fr?$fr->codigo:''),'class' => $idioma->codigo == 'es'?'required':'')) !!}
        </div>
        <div class="form-group">
            {!! Form::nth_textfield('descripcion__'.$idioma->codigo, 'Descripción', $errors, null, array('value'=>($fr?$fr->descripcion:''),'class' => $idioma->codigo == 'es'?'required':'')) !!}
        </div>
    </fieldset>
@endforeach