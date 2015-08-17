<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    <ul class="menu-nosotros">
        <li>
            <a href="{{URL::to('reserva')}}">
                {{ getFrase("terminos_reserva",session("lang"), "Reserva y Pago") }}
            </a>
        </li>
        <li>
            <a href="{{URL::to('cancelaciones')}}">
                {{ getFrase("terminos_cancelaciones",session("lang"), "Cancelaciones") }}
            </a>
        </li>
        <li>
            <a href="{{URL::to('entrega')}}">
                {{ getFrase("terminos_liderazgo",session("lang"), "Liderazgo y Programa de entrega") }}
            </a>
        </li>
        <li>
            <a href="{{URL::to('responsabilidad')}}">
                {{ getFrase("terminos_responsabilidad",session("lang"), "Responsabilidad") }}
            </a>
        </li>
        <li>
            <a href="{{URL::to('equipoRecomendaciones')}}">
                {{ getFrase("terminos_equipo",session("lang"), "Equipo") }}
            </a>
        </li>
        <li>
            <a href="{{URL::to('quejas')}}">
                {{ getFrase("terminos_quejas",session("lang"), "Quejas") }}
            </a>
        </li>
        <li>
            <a href="{{URL::to('general')}}">
                {{ getFrase("terminos_general",session("lang"), "General") }}
            </a>
        </li>

    </ul>
</div>