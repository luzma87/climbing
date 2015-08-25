<h1>{{ $nombre }}</h1>

<p>
    {!! getFrasePrograma($frase, "resumen", "_resumen del programa_") !!}
</p>

<h2>{!! getFrasePrograma($frase, "nombre", "_nombre del programa_") !!}</h2>

<span class="text-left">
        {!! getFrase("programas_una_graduacionTecnica",$lang, "Graduación Técnica de la ruta:") !!}
    {{ $dificultad }}
    </span>
<a href="" class="rojo">
    {!! getFrase("programas_una_contactenos",$lang, "Contáctenos") !!}
</a>

<p style="margin-top: 10px">
    <img src="{!! URL::asset($programa->foto) !!}" width="100%" style="margin-left: 15px"/>
</p>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h5>
            {!! getFrase("programas_una_descripcion",$lang, "Descripción:") !!}
        </h5>

        <p>
            {!! getFrasePrograma($frase, "descripcion", "_descripcion del programa_") !!}
        </p>
        <h5>
            {!! getFrase("programas_una_itinerario",$lang, "Itinerario:") !!}
        </h5>

        <p>
            {!! getFrasePrograma($frase, "itinerario", "_itinerario del programa_") !!}
        </p>

        <div class="row" style="margin-top: 15px">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                <a href="" style="color: #000000">{!! getFrase("programas_una_galeria",$lang, "Galería") !!}</a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                <a href="" style="color: #000000">{!! getFrase("programas_una_contactenos",$lang, "Contáctenos") !!}</a>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h4>
            {!! getFrase("programas_una_recomendaciones",$lang, "Recomendaciones:") !!}
        </h4>

        <p class="p-azul">
            {!! getFrasePrograma($frase, "recomendaciones", "_recomendaciones del programa_") !!}
        </p>
        <h4>
            {!! getFrase("programas_una_llevar",$lang, "Qué llevar:") !!}
        </h4>

        <p class="p-azul">
            {!! getFrasePrograma($frase, "llevar", "_llevar del programa_") !!}
        </p>
        <h4>
            {!! getFrase("programas_una_incluye",$lang, "Qué incluye:") !!}
        </h4>

        <p class="p-azul">
            {!! getFrasePrograma($frase, "incluye", "_incluye del programa_") !!}
        </p>
        <h4>
            {!! getFrase("programas_una_noIncluye",$lang, "No incluye:") !!}
        </h4>

        <p class="p-azul">
            {!! getFrasePrograma($frase, "noIncluye", "_no incluye del programa_") !!}
        </p>

    </div>
</div>