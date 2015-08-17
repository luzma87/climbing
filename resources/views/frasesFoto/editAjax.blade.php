<p>
    Modificar la frase:
    <strong>{{ $frase->contenido }}</strong>
</p>

{!! Form::model($frase, ['id'=>'frmFraseFoto', 'method' => 'PATCH', 'route' => array('adminFrasesFoto.update', $frase->id)]) !!}

@include('frasesFoto/partials/_formAjax', ['idioma' => $frase->idioma, 'foto'=>$frase->foto_id, "redirectme"=>$redirectme])

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
