<div class="modal-body-max-height">
    {!! Form::model($grupo, ['id'=>'frmGrupoPrograma','method' => 'PATCH', 'route' => ['gruposPrograma.update', $grupo->id]]) !!}
    <div class="row">
        @include('gruposPrograma/partials/_formAjax', ['idiomas' => $idiomas, 'grupo' => $grupo])
    </div>
    {!! Form::close()  !!}
</div>

<script type="text/javascript">
    var $frm = $("#frmGrupoPrograma");
    $frm.validate({
        submitHandler : function (form) {
            openLoader();
            form.submit();
        }
    });
</script>
