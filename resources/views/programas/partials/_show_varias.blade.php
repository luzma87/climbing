<h1 style="width: 100%;text-align: center">
    {{ $nombre }}
</h1>

<h1>
    {!! getFrasePrograma($frase, "nombre", "_nombre del programa_") !!}
</h1>

<p>
    {!! getFrasePrograma($frase, "resumen", "_resumen del programa_") !!}
</p>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
        @foreach($programa->partes as $index => $parte)
            <?php
            $nombre = '';
            $frasesParte = $parte->frases()->idioma($lang)->first();
            ?>
            <div class="dia">
                <h5 class="header-dia">{{ $frasesParte->nombre }}<span class="leer-mas">Leer más</span></h5>
                <img width="100%" class="hide-dia" src="{!!  URL::asset($parte->foto)  !!}">

                <div class="resumen">
                    {!! $frasesParte->resumen !!}
                </div>

                <div class="descripcion" style="display: none">
                    {!! $frasesParte->descripcion !!}
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="dia">
            <h4>Logística:</h4>

            <div>
                {!! getFrasePrograma($frase, "logistica", "_logistica del programa_") !!}
            </div>
        </div>

    </div>
</div>

<script>
    $(".header-dia").click(function () {
        $(this).parent().find(".descripcion").toggle();
        $(this).parent().find(".resumen").toggle();
    }).css({
        cursor : "pointer",
        width  : "100%"
    })
</script>