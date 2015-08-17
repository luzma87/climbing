<div class="modal-body-max-height">
    {!! Form::model($tipo, ['id'=>'frmTipoDificultad', 'method' => 'PATCH', 'route' => ['adminTiposDificultad.update', $tipo->id]]) !!}
    <div class="row">
        @include('tiposDificultad/partials/_formAjax', ['idiomas' => $idiomas, 'tipo'=>$tipo])
    </div>
    {!! Form::close()  !!}
</div>

<script type="text/javascript">
    var $frm = $("#frmTipoDificultad");
    $frm.validate({
        submitHandler : function (form) {
            openLoader();
            form.submit();
        }
    });
</script>
