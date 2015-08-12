<p>
    Traducir a <em>{{ $idioma->nombre }}</em> la frase:
    <strong>{{ $fraseEs->contenido }}</strong>
</p>

{!! Form::model(new App\Frase, ['id'=>'frmFrase', 'route' => ['frases.store']]) !!}

@include('frases/partials/_formAjax', ['idioma' => $idioma->id, 'codigo'=>$fraseEs->codigo, "pagina"=>$fraseEs->pagina, "redirectme"=>$redirectme])

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
