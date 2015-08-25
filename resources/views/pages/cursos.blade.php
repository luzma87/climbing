@extends('layouts.defaultWeb')

@section('title', 'Nuestros Programas')

@section('content')
    @include('pages/partials/_menu')

    <div class="row bottom-row">
        <div class="col-lg-3 col-xs-12  col-lg-offset-1 col-xs-offset-1 col-md-3  col-md-offset-1 col-sm-4  col-sm-offset-1 text-left " style="padding-left: 0px">
            {!! getFrase("culturaAventura",session("lang"), "Cultura y Aventura!") !!}
        </div>
        <div class="col-lg-6  col-lg-offset-1 col-md-6  col-md-offset-1 hidden-sm  hidden-xs text-right">
            {!! getFrase("operadoraTuristica",session("lang"), "Operadora turística en Ecuador y Sud América") !!}
        </div>
    </div>
    <div class="row page-content">
        @include('pages/partials/_menuProgramas')

        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 " style="text-align: justify">
            <h1>Capacitación - Cursos</h1>

            <p>
                Ponemos a su disposición cursos de capacitación así como de actualización de las diversas
                técnicas usas en la roca como el hielo. Para que su experiencia en la montaña sea
                lo más segura posible.
            </p>

            <p>
                Los cursos serán dictados por los mejores instructores de la Escuela de Guías de Montaña
                del Ecuador
            </p>

            <p>
                Contamos con cursos para todos los niveles: Básico, Medio y Avanzado.
            </p>

            <p><b>Importante: Nosotros no extendemos ningún tipo de certificado ni acreditación</b></p>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h5>Cursos de glaciar y escala en hielo:</h5>
                    <h5>Nivel Básico:</h5>

                    <p>
                        1.Introducción a la alta montaña
                        2.Revisión de equipo de alta montaña
                        3.Técnicas de cramponaje
                        4.Técnicas de piolet
                        5.Nudos
                        6.Encordamiento
                        7.Técnicas de travesía en glaciar
                        8.Introducción a la escalada en hielo
                    </p>
                    <h5>Nivel Intermedio:</h5>

                    <p>
                        1.Revisión de técnicas de encordamiento, uso
                        de cuerda
                        2.Sistemas de anclajes en nieve y hielo
                        3.Técnicas de auto rescate y rescate
                        4.Escalada en top roupe
                    </p>

                    <h5> Nivel avanzado:</h5>

                    <p>
                        1.Escalada en punta
                        2.Técnicas de vivibag
                        3.Revisión y aplicación de todas las técnicas
                        4.Introducción a sistemas rescate y evacuación
                        en glaciar
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
                    <img width="100%" src="{!!  URL::asset('assets/images/programas/cursos.PNG')  !!}">

                </div>
            </div>


        </div>


    </div>

@stop