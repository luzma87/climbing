<input type="hidden" name="tipo" value="U"/>

<h1 class="text-center">{{ $nombre }}</h1>

<input type="hidden" name="grupo_programa_id" value="{{ $grupo->id }}"/>
<input type="hidden" name="tipo" value="una"/>

{!! Form::nth_textfield('codigo', 'Código (para identificarlo con su galería)', $errors, null, array('class' => 'required')) !!}
{!! Form::nth_textfield('orden', 'Orden (dentro del grupo de programas)', $errors, null, array('class' => 'required')) !!}

{!! Form::nth_textarea('resumen__'.$lang, 'Resumen', $errors, null, array('class' => 'required')) !!}
{!! Form::nth_textfield('nombre__'.$lang, 'Nombre', $errors, null, array('class' => 'required')) !!}
{!! Form::nth_select('tipo_dificultad_id', 'Graduación de técnica', $tipos, $errors, null, array()) !!}
{!! Form::nth_file('foto', 'Foto', $errors, null) !!}
{!! Form::nth_textarea('descripcion__'.$lang, 'Descripción', $errors, null, array('class' => 'required')) !!}
{!! Form::nth_textarea('itinerario__'.$lang, 'Itinerario', $errors, null, array('class' => 'required')) !!}
{!! Form::nth_textarea('recomendaciones__'.$lang, 'Recomendaciones', $errors, null, array('class' => 'required')) !!}
@if($recomendaciones && sizeof($recomendaciones) > 0)
    {!! Form::nth_select_default('recomendacionesSelect', 'Recomendaciones (otros programas', $recomendaciones, '-- Ninguna --', $errors, null, array()) !!}
@endif
{!! Form::nth_textarea('requisitos__'.$lang, 'Requisitos', $errors, null, array('class' => 'required')) !!}
{!! Form::nth_textarea('llevar__'.$lang, 'Qué llevar', $errors, null, array('class' => 'required')) !!}
{!! Form::nth_file('llevarFile__'.$lang, 'Pdf con lista de equipo anexo', $errors, null) !!}
{!! Form::nth_textarea('incluye__'.$lang, 'Qué incluye', $errors, null, array('class' => 'required')) !!}
{!! Form::nth_textarea('noIncluye__'.$lang, 'No incluye', $errors, null, array('class' => 'required')) !!}

<div style="margin-bottom: 15px;">
    {!! Form::nth_img_button($submit_text, null, "fa-floppy-o", array('id'=>'btnSave', 'class' => 'btn-nth')) !!}
</div>