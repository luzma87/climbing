<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 text-justify">
    <h1>{{ $nombre }}</h1>

    <p>
        {!! getFrasePrograma($frase, "resumen", "_resumen del programa_") !!}
    </p>

    <p>
        <b>
            {!! getFrase("programas_cursos_importante", $lang,"Importante: Nosotros no extendemos ningún tipo de certificado ni acreditación") !!}
        </b>
    </p>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h5>
                {!! getFrasePrograma($frase, "nombre", "_nombre del programa_") !!}
            </h5>
            <h5>{!! getFrase("programas_cursos_basico", $lang,"Nivel básico") !!}</h5>
            {!! getFrasePrograma($frase, "nivelBasico", "_nivel basico_") !!}

            <h5>{!! getFrase("programas_cursos_medio", $lang,"Nivel medio") !!}</h5>
            {!! getFrasePrograma($frase, "nivelMedio", "_nivel medio_") !!}

            <h5>{!! getFrase("programas_cursos_avanzado", $lang,"Nivel básico") !!}</h5>
            {!! getFrasePrograma($frase, "nivelAvanzado", "_nivel avanzado_") !!}


            <div class="row" style="margin-top: 15px">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                    <a href="" style="color: #000000">{!! getFrase("programas_cursos_galeria",$lang, "Galería") !!}</a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                    <a href="" style="color: #000000">{!! getFrase("programas_cursos_contactenos",$lang, "Contáctenos") !!}</a>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <img width="100%" src="{!!  URL::asset($programa->foto)  !!}">

        </div>
    </div>
</div>