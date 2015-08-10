<?php
    use App\Idioma;

?>

<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-body">
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

                @foreach(Idioma::all() as $idioma)
                    <tr>
                        <th class="text-white">{{ $idioma->nombre }}</th>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


