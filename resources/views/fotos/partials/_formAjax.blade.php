<input type="hidden" name="galeria" value="{{ $galeria }}"/>
<input type="hidden" name="redirectme" value="{{ $redirectme }}"/>

<div class="form-group">
    {!! Form::nth_file('path', 'Foto', $errors, null, array('class'=>'required')) !!}
</div>
