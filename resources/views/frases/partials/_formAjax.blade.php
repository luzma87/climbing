<input type="hidden" name="idioma" value="{{ $idioma }}"/>
<input type="hidden" name="pagina" value="{{ $pagina }}"/>
<input type="hidden" name="codigo" value="{{ $codigo }}"/>
<input type="hidden" name="redirectme" value="{{ $redirectme }}"/>

{!! Form::nth_textarea('contenido', 'Contenido', $errors, null, array('class' => 'required editor')) !!}
