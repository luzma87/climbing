<div class="modal-body-max-height">
    {!! Form::model(new App\GrupoPrograma(), ['id'=>'frmGrupoPrograma', 'route' => ['gruposPrograma.store']]) !!}
    <div class="row">
        @include('gruposPrograma/partials/_formAjax', ['idiomas' => $idiomas])
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
