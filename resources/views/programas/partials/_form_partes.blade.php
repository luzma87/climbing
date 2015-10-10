<style type="text/css">
    .collapse {
        border : none;
    }
</style>

<fieldset>
    <legend class="text-verde">Partes/Días ({{ $lang }})</legend>
    @if($programa)
        <div class="panel panel-success" style="font-size:smaller;">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-plus-circle"></i>
                    Nueva parte/día
                </h3>
            </div>
            <div class="panel-body bg-success">
                {!! Form::model(new App\PartePrograma(), ['class'=>'frmPartePrograma frmPartePrograma_new', 'files' => true, 'route' => ['adminPartesProgramas.store']]) !!}
                @include('partesProgramas/partials/_form', ['submit_text' => 'Crear parte/día ('.$lang.')', "submit_id" => "_new", "fraseEs" => null, "lang" => $lang, "parte" => null,
                "frase"=>null, "tipos"=>$tipos, "redirectme" => 'adminProgramas/edit/'.$programa->codigo.'/'.$lang, "programa"=>$programa->id])
                {!! Form::close()  !!}
            </div>
        </div>

        @foreach($programa->partes as $index => $parte)
            <?php
            $frasesEs = null;
            $nombre = '';
            if ($lang != 'es') {
                $frasesEs = $parte->frases()->idioma('es')->first();
            }
            $frasesParte = $parte->frases()->idioma($lang)->first();
            if ($frasesParte) {
                $nombre = $frasesParte->nombre;
            }
            ?>
            <div class="panel panel-default" style="font-size:smaller;">
                <div class="panel-heading" role="tab" id="heading{{ $index }}">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 class="panel-title">
                                <a class="clickable" role="button" data-toggle="collapse" href="#collapse{{ $index }}" aria-expanded="true" aria-controls="collapse{{ $index }}">
                                    <i class="fa fa-caret-down"></i>
                                    {{ $parte->orden }}.- {{ $nombre }}
                                </a>
                            </h4>
                        </div>
                        <div class="col-md-2">
                            {!! Form::open(array('class' => 'form-inline pull-right', 'method' => 'DELETE', 'route' => array('adminGruposPrograma.destroy', $grupo->id))) !!}
                            <div class="btn-group btn-group-xs" role="group">
                                {!! Form::nth_img_button_clase("Editar", null , "fa-pencil", array('class' => 'btn-edit-grupo btn-warning btn-sm', 'label' => false, 'data' => 'data-id="'.$grupo->id.'"')) !!}
                                {!! Form::nth_img_button_clase("Eliminar", null, "fa-trash-o", array('class' => 'btn-delete-grupo btn-sm btn-danger', 'label' => false)) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div id="collapse{{ $index }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $index }}">
                    <div class="panel-body">
                        {!! Form::model($parte, ['class'=>'frmPartePrograma frmPartePrograma_'.$parte->id, 'files' => true,'method' => 'PATCH',  'route' => ['adminPartesProgramas.update']]) !!}
                        @include('partesProgramas/partials/_form', ['submit_text' => 'Modificar parte/día ('.$lang.')',  "submit_id" => "_".$parte->id, "fraseEs" => $frasesEs, "lang" => $lang, "parte" => $parte,
                                    "frase"=>$frasesParte, "tipos"=>$tipos, "redirectme" => 'adminProgramas/edit/'.$programa->codigo.'/'.$lang, "programa"=>$programa->id])
                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        @endforeach

    @else
        <div class="alert alert-info">
            <i class="fa fa-exclamation-triangle"></i> Primero guarde el programa para crear partes o días
        </div>
    @endif
</fieldset>