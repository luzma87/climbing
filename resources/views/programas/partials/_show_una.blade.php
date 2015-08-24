<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 text-justify">
    <h1>{{ $nombre }}</h1>

    <p>
        {!! getFrasePrograma($frase, "resumen", "_resumen del programa_") !!}
    </p>

    <h2>{!! getFrasePrograma($frase, "nombre", "_nombre del programa_") !!}</h2>

    <span class="text-left">
        {!! getFrase("graduacionTecnica",session("lang"), "Graduación Técnica de la ruta:") !!}
        {{ $dificultad }}
    </span>
    <a href="" class="rojo">
        {!! getFrase("contactenos",session("lang"), "Contáctenos") !!}
    </a>

    <p style="margin-top: 10px">
        <img src="{!! URL::asset($programa->foto) !!}" width="100%" style="margin-left: 15px"/>
    </p>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h5>
                {!! getFrase("programas_descripcion",session("lang"), "Descripción:") !!}
            </h5>

            <p>
                {!! getFrasePrograma($frase, "descripcion", "_descripcion del programa_") !!}
            </p>
            <h5>
                {!! getFrase("programas_itinerario",session("lang"), "Itinerario:") !!}
            </h5>

            <p>
                {!! getFrasePrograma($frase, "itinerario", "_itinerario del programa_") !!}
            </p>

            <div class="row" style="margin-top: 15px">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                    <a href="" style="color: #000000">{!! getFrase("galeria",session("lang"), "Galería") !!}</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                    <a href="" style="color: #000000">{!! getFrase("contactenos",session("lang"), "Contáctenos") !!}</a>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h4>
                {!! getFrase("programas_recomendaciones",session("lang"), "Recomendaciones:") !!}
            </h4>

            <p class="p-azul">
                {!! getFrasePrograma($frase, "recomendaciones", "_recomendaciones del programa_") !!}
            </p>
            <h4>
                {!! getFrase("programas_llevar",session("lang"), "Qué llevar:") !!}
            </h4>

            <p class="p-azul">
                {!! getFrasePrograma($frase, "llevar", "_llevar del programa_") !!}
            </p>
            <h4>
                {!! getFrase("programas_incluye",session("lang"), "Qué incluye:") !!}
            </h4>

            <p class="p-azul">
                {!! getFrasePrograma($frase, "incluye", "_incluye del programa_") !!}
            </p>
            <h4>
                {!! getFrase("programas_noIncluye",session("lang"), "No incluye:") !!}
            </h4>

            <p class="p-azul">
                {!! getFrasePrograma($frase, "noIncluye", "_no incluye del programa_") !!}
            </p>

        </div>
    </div>
</div>