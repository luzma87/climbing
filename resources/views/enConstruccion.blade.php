@extends('layouts.defaultWeb')

@section('title', 'En construcción')

@section('content')
    <div class="top col-xs-12 col-md-12 col-lg-12"></div>
    <div class="banner col-xs-12 col-md-12 col-lg-12">
        <img class="imgBanner" src="{!!  URL::asset('assets/images/montana2.jpg')  !!}" style="margin: 0px"/>

        <div class="menu-container">
            <div class="row upper-row">

                <div class="logo col-xs-3 col-md-2 col-sm-3 col-lg-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                    <img class="imgBanner" src="{!!  URL::asset('assets/images/logo.PNG')  !!}" style="width: 100%;margin: 0px"/>
                </div>

                <div class="col-lg-7 col-md-6 col-sm-7 col-xs-3 menu-horizontal col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-2">
                    <a href="#" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2  col-xs-12 ui-corner-all active">INICIO</a>
                    <a href="#" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2 col-xs-12 ui-corner-all">NOSOTROS</a>
                    <a href="#" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2 col-xs-12 ui-corner-all">COMENTARIOS</a>
                    <a href="#" class="btn-menu-horizontal col-lg-2 col-md-2 col-sm-2 col-xs-12 ui-corner-all">CONTACTO</a>
                </div>
            </div>
            <div class="row menu-vertical hidden-xs">
                <div class="col-lg-2 col-lg-offset-1 col-xs-3 col-md-2 col-sm-3 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 ">
                    <nav class="navbar navbar-default navSvt" role="navigation" style="background: none;border: none">
                        <div class="container-fluid navSvt">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header navSvt hidden-lg">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand hidden-lg" href="#">Menú</a>
                            </div>

                        </div>
                        <div class="collapse navbar-collapse navSvt " id="bs-example-navbar-collapse-1">
                            <a href="#" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
                                ECUADOR PAÍS MEGA DIVERSO
                            </a>
                            <a href="#" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                NUESTROS PROGRAMAS
                            </a>
                            <a href="#" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                RECOMENDACIONES
                            </a>
                            <a href="#" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                TÉRMINOS Y CONDICIONES
                            </a>
                            <a href="#" class="btn-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                GALERÍA
                            </a>
                        </div>
                    </nav>

                </div>
            </div>
        </div>

        <div class="row info-row hidden-xs ">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-10  col-lg-offset-1  col-md-offset-1 col-sm-offset-1 col-xs-offset-1 info-text">
                Cumbre Illiniza Sur 5248 msnm, Ciudad Encantada
            </div>
            <div class="col-lg-3 col-md-3  col-sm-3  hidden-xs  info-icos">
                <img src="{!!  URL::asset('assets/images/iconos.PNG')  !!}" style="height: 90%">
            </div>
        </div>

    </div>

    <div class="row bottom-row">
        <div class="col-lg-3 col-xs-12  col-lg-offset-1 col-xs-offset-1 col-md-3  col-md-offset-1 col-sm-4  col-sm-offset-1" style="text-align: left;padding-left: 0px">
            Cultural and adventure!!!
        </div>
        <div class="col-lg-6  col-lg-offset-1 col-md-6  col-md-offset-1 hidden-sm  hidden-xs" style="text-align: right">
            Ecuador and South America Tour Operator
        </div>
    </div>
    <div class="row page-content">
        <div class="col-lg-10 col-lg-offset-1">
            <h1>Ecuador and South America Tour Operator</h1>
            Bienvenidos a Yes Climbing Guides.<br>
            Somos un grupo de guías especializados en turismo y deportes de montaña. Nuestra empresa brinda diferentes
            tipos de
            programas y servicios aptados para cada una de las necesidades de nuestros clientes. En los cuales prevalece
            la seguridad,
            honestidad.<br>
            Ofertamos paquetes turísticos de calidad dirigidos a personas de todas las edades, condiciones físicas y
            experiencia montañera. Los que pueden realizarse de manera individual, grupal, familiar y empresarial
            El cumplimiento de cada uno de estos estará sujeto a condiciones meteorológicas y de seguridad que serán
            evaluadas por
            nuestros guías. Para hacer de su estadía la mejor experiencia de su vida.<br>
            Esta empresa tiene como misión dar a conocer al mundo un paraíso maravilloso como lo es el Ecuador.<br>
            Nuestro objetivo es el de ofrecer un servicio de calidad a nuestros clientes, respetando el entorno natural
            y cultural, gestionamos el desarrollo de programas y circuitos turísticos de bajo impacto ambiental (turismo
            sin huella ecológica).<br>
            Nuestra visión es ser en un futuro cercano la empresa líder en manejo de paquetes turísticos y manejo de
            grupos en el Ecuador
            y Sud América.<br>
            NUESTRO EQUIPO<br>
            Nuestro equipo está conformado por guías profesionales con un alto sentido de responsabilidad, buen sentido
            del humor,
            calidad humana.<br>
            Apasionados por la montaña y la cultura lo que hace la diferencia en su trabajo y desenvolvimiento con los
            grupos de turistas a
            su cargo.<br>
            Los guías de nuestra empresa cuentan con certificaciones nacionales e internacionales acreditadas ante el
            Ministerio de
            Turismo y el Ministerio del Ambiente para ejercer su oficio.<br>
            Dentro de las certificaciones más destacadas de nuestro equipo están:<br>
            ASEGUIM (Asociación de Ecuatoriana de Guías de Montaña)<br>
            UIAGM (Unión Internacional de Guías de Montaña)<br>
            WFR (Wilderness First Responder), WAFA (Wilderness Advanced First Aid) acreditada por NOLS (National Outdoor
            Leadership
            School) Wilderness Medicine Institute.<br>
            Por otra parte todos tienen con muchos años de experiencia como montañeros, escaladores y deportistas de
            aventura antes de
            ejercer sus actividades profesionales como guías.<br>
            Gerente General Romel Sandoval:<br>
            Nacido en Quito. Toda su vida ha estado vinculada al deporte, naturaleza y la aventura. Apasionado por
            fotografía y la vida en
            estado puro.<br>
            Guía de Montaña ASEGUIM, Ing. Gestión Ambiental, Auditor Líder ISO 14001, Certificación Internacional en
            primeros auxilios
            en zonas agrestes Wilderness Advanced First Aid.<br>
            La montaña me ha dado un sinnúmero de satisfacciones y enseñanzas que las he podido poner en práctica en mi
            vida cotidiana. Ha sido mi fuente de energía, el lugar donde he conocido verdaderos amigos y me ha permitido
            realizarme como ser
            humano.<br>
            Sus intereses personales están enfocados a la investigación, lectura y el deporte, Miembro del Sadday, Club
            Atlético Lince. Ha
            trabajado como guía de montaña por más de 16 con amplia experiencia en manejo de grupos como tour líder.<br>
            Ha escalado todos los nevados del Ecuador por vías normales y técnicas. Varias expediciones internacionales
            en sud América y
            una expedición a los Alpes. Dentro de su trayectoria deportiva ha participado en las más prestigiosas
            carreras pedestres de
            fondo del país, carreras de aventura, competencias de bicicleta de montaña.<br>
            FOTO<br>
            SEGURIDAD<br>
            Ecuador es un país tranquilo donde todavía vivimos en un ambiente de paz. Pero como en todo lado se debe
            tomar ciertas
            medidas de seguridad para evitar ser robados o asaltados.<br>
            La regla de oro es ˝No andar solos en la noche o en lugares desolados. No estar en el lugar equivocado a la
            hora equivocada˝<br>
            NUESTROS PRECIOS<br>
            Son los más competitivos del mercado, estos dependen del tipo de servicio que deseen recibir, están
            adaptados de acuerdo a
            cada uno de los programas y los servicios requeridos<br>
        </div>
    </div>

@stop