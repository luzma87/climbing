{!! Form::model(new App\Foto, ['id'=>'frmFoto', 'files' => true, 'route' => ['fotos.store']]) !!}

@include('fotos/partials/_formAjax', ["galeria"=>$galeria, "redirectme"=>$redirectme])

{!! Form::close()  !!}

<script type="text/javascript">
    var $frm = $("#frmFoto");
    $frm.validate({
        submitHandler : function (form) {
            openLoader();
            form.submit();
        }
    });
</script>
