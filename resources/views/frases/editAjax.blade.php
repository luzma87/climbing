<p>
    Modificar la frase:
    <strong>{{ $frase->contenido }}</strong>
</p>

{!! Form::model($frase, ['id'=>'frmFrase', 'method' => 'PATCH', 'route' => array('frases.update', $frase->id)]) !!}

@include('frases/partials/_formAjax', ['idioma' => $frase->idioma, 'codigo'=>$frase->codigo, "pagina"=>$frase->pagina, "redirectme"=>$redirectme])

{!! Form::close()  !!}

<script type="text/javascript">
    var $frm = $("#frmFrase");
    $frm.validate({
        submitHandler : function (form) {
            openLoader();
            form.submit();
        }
    });
</script>
