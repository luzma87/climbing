<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-body foto-container">
            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('adminFotos.destroy', $foto->id))) !!}
            <input type="hidden" name="redirectme" value="{{ $redirectme }}"/>

            <a href="#" class="qtip-top pull-right text-danger btn-delete-foto" title="Eliminar foto">
                <i class="fa fa-trash-o"></i> Eliminar foto
            </a>
            {!! Form::close() !!}

            <img src="{!!  URL::asset($foto->path) !!}" class="img-thumbnail">
        </div>
        <table class="table table-bordered table-hover table-striped table-condensed verde">
            <thead>
                <tr>
                    <th class="text-white">Idioma</th>
                    <th class="text-white">Título</th>
                    <th class="text-white">Descripción</th>
                </tr>
            </thead>
            <tbody>

                @foreach($idiomas as $idioma)
                    {!! Form::nth_frase_foto_editar($foto->id, $idioma) !!}
                @endforeach
            </tbody>
        </table>
    </div>
</div>


