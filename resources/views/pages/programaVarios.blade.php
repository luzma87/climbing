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
        <h1 style="width: 100%;text-align: center">
            Expediciones en Ecuador Programas elaborados
        </h1>
        <h1>MONTAÑA Y CULTURA</h1>

        <p>
            En esta sección usted encontrara algunas opciones de programas elaborados por nuestros
            guías que de seguro serán un gran proyecto para usted.
            Han sido diseñados pensando en usted y su comodidad. También como accesibles para
            su nivel de experiencia en montaña.
        </p>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
                <div class="dia">
                    <h5 class="header-dia">Día 1: Transfer inn<span class="leer-mas">Leer más</span></h5>
                    <p   class="hide-dia" >
                        Hospedaje: Hotel en Quito
                    </p>
                    <p class="resumen " style="display: none">
                        Resumen
                    </p>
                    <img width="100%"   class="hide-dia"   src="{!!  URL::asset('assets/images/programas/dia1.PNG')  !!}">
                </div>
                <div class="dia">
                    <h5 class="header-dia">Día 2: Quito City línea <span class="leer-mas">Leer más</span></h5>
                    <p class="hide-dia">
                        Capital de la República del Ecuador, situada
                        a 2800 m.s.n.m. es poseedora del centro
                        histórico más grande e importante de sud
                        América, sus edificaciones datan de los
                        siglos XVI, XVII, XVIII y XIX. Sus edificios
                        dan testimonio de la habilidad de los artistas
                        nacionales, sus conventos, plazas, iglesias,
                        dan a sus visitantes la sensación de un retroceso
                        en el tiempo.<br/>
                        Noche en Quito
                    </p>
                    <p class="resumen "  style="display: none">
                        Resumen
                    </p>
                    <img width="100%"   class="hide-dia" src="{!!  URL::asset('assets/images/programas/dia1.PNG')  !!}">
                </div>

            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="dia">
                    <h4 class="header-dia">Logística: <span class="leer-mas">Leer más</span></h4>
                    <p class="hide-dia">
                        -Duración: 15 días
                        -Temporada: Todo el año
                        -Pre requisitos: Condición de salud y
                        física aceptable
                        -Equipo necesario: Ver lista Pdf
                        -Acomodación: Alojamiento en Hoteles y
                        Refugios de montaña
                    </p>
                    <p class="resumen "  style="display: none">
                        Resumen
                    </p>

                </div>

            </div>
        </div>


    </div>


</div>
<script>
    $(".header-dia").click(function(){
        $(this).parent().find(".hide-dia").toggle()
        $(this).parent().find(".resumen").toggle()
    }).css({
        cursor:"pointer",
        width:"100%"
    })
</script>
@stop