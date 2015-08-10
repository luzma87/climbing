{!! Form::model($foto, ['id'=>'frmFoto', 'files' => true, 'method' => 'PATCH', 'route' => array('fotos.update', $foto->id)]) !!}

@include('fotos/partials/_formAjax', ["galeria"=>$foto->galeria, "redirectme"=>$redirectme])

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
