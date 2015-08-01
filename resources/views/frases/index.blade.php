<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>

@extends('layouts.defaultAdmin')

@section('title', 'Frases')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel-completo" style="padding: 5px">
                <div class="row fila" style="margin-left: 0">
                    <div class="col-md-11 titulo-panel">
                        Frases
                    </div>
                </div>

                <div class="row fila" style="margin-left: 0">
                    <div class="btn-toolbar toolbar">
                        <div class="btn-group">
                            <a href="/zeus/persona/form" class="btn btn-verde btnCrear">
                                <i class="fa fa-file-o"></i> Crear
                            </a>
                        </div>
                        <!-- Single button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <div class="btn-group pull-right col-md-3">
                            <div class="input-group">
                                <input type="text" class="form-control input-search" placeholder="Buscar" value="">
                                    <span class="input-group-btn">
                                        <a href="/zeus/persona/list" class="btn btn-verde btn-search">
                                            <i class="fa fa-search"></i>&nbsp;
                                        </a>
                                    </span>
                            </div>
                            <!-- /input-group -->
                        </div>
                    </div>
                </div>

                <div class="row fila">
                    <div class="col-md-12">
                        <table class="table table-condensed table-bordered table-striped table-hover verde">
                            <thead>
                                <tr>
                                    <th class="sortable"><a href="#">Idioma</a></th>
                                    <th class="sortable"><a href="#">Código</a></th>
                                    <th class="sortable"><a href="#">Contenido</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($frases->count() > 0)
                                    @foreach($frases as $frase)
                                        <tr>
                                            <td>{{ Idioma::find($frase->idioma)->nombre }}</td>
                                            <td>{{ $frase->codigo }}</td>
                                            <td>{!! link_to("/frases/{$frase->id}",$frase->contenido) !!}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3">Nada que mostrar</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop