<h2>Frases en esta página</h2>

<table class="table table-condensed table-bordered table-striped table-hover verde">
    <thead>
        <tr>
            @foreach($idiomas as $idioma)
                <th width="{{ $prct }}%" class="text-white">{{ $idioma->nombre }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($frases as $frase)
            <tr>
                @foreach($idiomas as $idioma)
                    <td>
                        {!! Form::nth_frase_editar($frase->codigo, $idioma->codigo, $frase, "<em>No se ha definido la frase en ".$idioma->nombre."</em>") !!}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>

<script type="text/javascript">
    $(function () {
        $(".btn-edit-frase").click(function () {
            openFormFrase("edit", $(this), "{{ URL::to('adminFrases/editAjax') }}", "{{ $redirectme }}");
            return false;
        });
        $(".btn-create-frase").click(function () {
            openFormFrase("create", $(this), "{{ URL::to('adminFrases/createAjax') }}", "{{ $redirectme }}");
            return false;
        });
    });
</script>