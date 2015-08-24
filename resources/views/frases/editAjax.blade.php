<p>
    Modificar la frase:
    <strong>{{ $frase->contenido }}</strong>
</p>

{!! Form::model($frase, ['id'=>'frmFrase', 'method' => 'PATCH', 'route' => array('adminFrases.update', $frase->id)]) !!}

@include('frases/partials/_formAjax', ['idioma' => $frase->idioma, 'codigo'=>$frase->codigo, "pagina"=>$frase->pagina, "redirectme"=>$redirectme])

{!! Form::close()  !!}

<script type="text/javascript">
    var $frm = $("#frmFrase");
    $frm.validate({
        submitHandler : function (form) {
            openLoader();
            for (var instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }
            form.submit();
        }
    });
</script>
{!! HTML::script('assets/js/loadEditor.js') !!}
