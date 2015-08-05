<html>
    <head>
        <title>TEST</title>
    </head>
    <body>
        {!! Form::model(new App\Frase, ['id'=>'frmFrase', 'route' => ['frases.store']]) !!}

        @include('frases/partials/_form', ['submit_text' => 'Crear frase'])

        {!! Form::close()  !!}

        <script type="text/javascript">
            var $frm = $("#frmFrase");

            $frm.validate();

            $("#btnSave").click(function () {
                $frm.submit();
                return false;
            });
        </script>
    </body>
</html>

