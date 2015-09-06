<div class="col-xs-10 col-sm-3 col-md-3 col-lg-3  col-lg-offset-1 col-md-offset-1 col-sm-offset-1" style="margin-bottom: 10px;">
    <ul class="menu-nosotros" style="margin-left: -15px">

        <li class="">
            <a href="#" class="btn-menu-nosotros">{!! getFrase("mediaMontana",session("lang"), "Media Montaña (1 día)") !!}</a>
            <ul class="submenu-nosotros">
                <li><a href="">Pasochoa</a></li>
                <li><a href="">Rucu Pichincha</a></li>
                <li><a href="">Guagua Pichincha</a></li>
                <li><a href="">Integral de los Pichinchas</a></li>
                <li><a href="">Fuya Fuya</a></li>
                <li class="active">Caminata Cuicocha</a> </li>
                <li><a href="">Imbabura</a></li>
                <li><a href="">El Corazón</a></li>
                <li><a href="">Rumiñahui</a></li>
            </ul>
        </li>
        <li class="">
            <a href="#" class="btn-menu-nosotros">{!! getFrase("altaMontania",session("lang"), "Alta Montaña") !!}</a>
        </li>
        <li class="">
            <a href="#" class="btn-menu-nosotros">{!! getFrase("montaniaYCultura",session("lang"), "Montaña y Cultura (15 días)") !!}</a>
        </li>
        <li class="">
            <a href="#" class="btn-menu-nosotros">{!! getFrase("amantesDeLaMontania",session("lang"), "Amantes de la Montaña (14 días)") !!}</a>
        </li>
        <li class="">
            <a href="#" class="btn-menu-nosotros">{!! getFrase("escaladaAdrenalina",session("lang"), "Escalada Adrenalina Pura (17 días)") !!}</a>
        </li>
        <li class="">
            <a href="#" class="btn-menu-nosotros">{!! getFrase("capacitacionYCursos",session("lang"), "Capacitación y Cursos") !!}</a>
        </li>
        <li class="">
            <a href="#" class="btn-menu-nosotros">{!! getFrase("lugaresRelax",session("lang"), "Lugares de Relax y Descanso") !!}</a>
        </li>
        <li class="">
            <a href="" class="btn-menu-nosotros">{!! getFrase("peru",session("lang"), "Perú") !!}</a>
        </li>
        <li class="">
            <a href="" class="btn-menu-nosotros">{!! getFrase("bolivia",session("lang"), "Bolivia") !!}</a>
        </li>
        <li class="">
            <a href="" class="btn-menu-nosotros">{!! getFrase("argentina",session("lang"), "Argentina") !!}</a>
        </li>
    </ul>
</div>
<script type="text/javascript">
    $(".btn-menu-nosotros").click(function () {
        $(this).parent().find("ul").toggle()
        return false
    })
</script>