<?php
    use App\Frase;
    use App\Foto;
    use App\Idioma;

?>
@extends('layouts.defaultWeb')

@section('title', 'Nuestros Programas')

@section('content')


    @include('pages/partials/_menu')

    <div class="row bottom-row">
        <div class="col-lg-3 col-xs-12  col-lg-offset-1 col-xs-offset-1 col-md-3  col-md-offset-1 col-sm-4  col-sm-offset-1 text-left " style="padding-left: 0px">
            {{ getFrase("culturaAventura",session("lang"), "Cultura y Aventura!") }}
        </div>
        <div class="col-lg-6  col-lg-offset-1 col-md-6  col-md-offset-1 hidden-sm  hidden-xs text-right">
            {{ getFrase("operadoraTuristica",session("lang"), "Operadora turística en Ecuador y Sud América") }}
        </div>
    </div>
    <div class="row page-content">
        @include('pages/partials/_menuProgramas')

        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 " style="text-align: justify">
            <h1>Media MONTAÑA - ACLIMATACIÓN</h1>

            <p>
                Ideales para iniciar un proceso de aclimatación si su objetivo es alcanzar una cumbre de
                más de 5000m.
            </p>

            <h2>Caminata alrededor de Cuicocha: 3 600 m/11,811 ft</h2>
            <span style="text-align: left">Graduación Técnica de la ruta: F: Fácil. </span> <a href="" class="rojo">Contactenos</a>

            <p style="margin-top: 10px">
                <img src="{!!  URL::asset('assets/images/programas/cui.PNG')  !!}" width="100%" style="margin-left: 15px"/>
            </p>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h5>Descripción:</h5>

                    <p>
                        La caminata es alrededor de una maravillosa
                        laguna que en idioma preincaico de la zona
                        significa Laguna de los Dioses. Durante el
                        recorrido estaremos en contacto con un
                        diverso ecosistema como lo es la ceja andina
                        donde admiraremos la flora nativa del lugar.
                        Al retornar al Quito tendremos la oportunidad
                        de visitar Cotacachi que es una ciudad que
                        convive dentro de lo indígena y mestizo. Su
                        principal atractivo turístico son las artesanías
                        en cuero.
                    </p>
                    <h5>Itinerario:</h5>

                    <p>
                        Salida: 6am desde Quito<br/>
                        Tiempo estimado de recorrido en auto: 3h<br/>
                        Alturas durante la visita: Punto de partida
                        3060m<br/>
                        Altura máxima: 3600 m/ 11,811 ft<br/>
                        Tiempo estimado de caminata: 3 a 5 horas<br/>
                        Tiempo estimado de retorno: 6 pm<br/>
                    </p>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                            <a href="" style="color: #000000">Galería</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                            <a href="" style="color: #000000">Contactenos</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h4>
                        Recomendaciones:
                    </h4>

                    <p class="p-azul">
                        Le recomendamos unir esta caminata
                        con una visita a Otavalo, ascensión al
                        Fuya Fuya o Imbabura.
                    </p>
                    <h4>
                        Qué llevar:
                    </h4>

                    <p class="p-azul">
                        Ropa abrigada, guantes, gorra de lana,
                        zapatos cómodos para la caminata, ropa
                        impermeable, protector solar, mochila
                        pequeña, cámara de fotos, botella para
                        agua, ropa de recambio, gafas.
                    </p>
                    <h4>
                        Qué incluye:
                    </h4>

                    <p class="p-azul">
                        Transporte privado, Guía de montaña
                        Aseguim, almuerzo de marcha.
                    </p>
                    <h4>
                        No incluye:
                    </h4>

                    <p class="p-azul">
                        Bebidas extras o alcohólicas, equipo
                        personal, desayuno, cena, ningún tipo de
                        seguro, propinas, otros gastos no especificados.
                    </p>

                </div>
            </div>


        </div>


    </div>

@stop