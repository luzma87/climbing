<input type="hidden" name="galeria" value="{{ $galeria }}"/>
<input type="hidden" name="redirectme" value="{{ $redirectme }}"/>

{!! Form::nth_file('path', 'Foto', $errors, null, array('class'=>'required')) !!}
