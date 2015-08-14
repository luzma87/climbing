<div class="modal-body-max-height">
    {!! Form::model(new App\TipoDificultad(), ['id'=>'frmTipoDificultad', 'route' => ['tiposDificultad.store']]) !!}
    <div class="row">
        @include('tiposDificultad/partials/_formAjax', ['idiomas' => $idiomas, 'tipo'=>null])
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
