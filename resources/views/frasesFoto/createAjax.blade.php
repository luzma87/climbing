
{!! Form::model(new App\Frase, ['id'=>'frmFraseFoto', 'route' => ['frasesFoto.store']]) !!}

@include('frasesFoto/partials/_formAjax', ['idioma' => $idioma->id, "foto"=>$foto, "redirectme"=>$redirectme])

{!! Form::close()  !!}

<script type="text/javascript">
    var $frm = $("#frmFraseFoto");
    $frm.validate({
        submitHandler : function (form) {
            openLoader();
            form.submit();
        }
    });
</script>
