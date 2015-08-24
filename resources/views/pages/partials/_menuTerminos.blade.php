<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    <ul class="menu-nosotros">
        <li>
            <a href="{{URL::to('reserva')}}">
                {!! getFrase("menuTerminos_reserva",session("lang"), "Reserva y Pago") !!}
            </a>
        </li>
        <li>
            <a href="{{URL::to('cancelaciones')}}">
                {!! getFrase("menuTerminos_cancelaciones",session("lang"), "Cancelaciones") !!}
            </a>
        </li>
        <li>
            <a href="{{URL::to('entrega')}}">
                {!! getFrase("menuTerminos_liderazgo",session("lang"), "Liderazgo y Programa de entrega") !!}
            </a>
        </li>
        <li>
            <a href="{{URL::to('responsabilidad')}}">
                {!! getFrase("menuTerminos_responsabilidad",session("lang"), "Responsabilidad") !!}
            </a>
        </li>
        <li>
            <a href="{{URL::to('equipoRecomendaciones')}}">
                {!! getFrase("menuTerminos_equipo",session("lang"), "Equipo") !!}
            </a>
        </li>
        <li>
            <a href="{{URL::to('quejas')}}">
                {!! getFrase("menuTerminos_quejas",session("lang"), "Quejas") !!}
            </a>
        </li>
        <li>
            <a href="{{URL::to('general')}}">
                {!! getFrase("menuTerminos_general",session("lang"), "General") !!}
            </a>
        </li>

    </ul>
</div>