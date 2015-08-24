<div class="col-xs-5 col-sm-2 col-md-2 col-lg-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
    <ul style="list-style: none">
        <li class="menuGuias text-center {{ $selected == 'certificaciones' ? 'menuGuiasSelected' : '' }}">
            <img src="{!!  URL::asset('assets/images/equipo/certificaciones.PNG')  !!}" style="width: 100%;margin: 0px"/>
            {!! getFrase("menu_certificaciones",session("lang"), "Certificaciones") !!}
        </li>
        <li style="text-align: center">
            <a href="{{URL::to('romel')}}" class="menuGuias {{ $selected == 'romel' ? 'menuGuiasSelected' : '' }}">
                <img src="{!!  URL::asset('assets/images/equipo/romel.PNG')  !!}" style="width: 100%;margin: 0px"/>
                {!! getFrase("menu_romel",session("lang"), "Romel Sandoval") !!}
            </a>
        </li>
        <li style="text-align: center">
            <a href="{{URL::to('nicolas')}}" class="menuGuias {{ $selected == 'nicolas' ? 'menuGuiasSelected' : '' }}">
                <img src="{!!  URL::asset('assets/images/equipo/nicolas.PNG')  !!}" style="width: 100%;margin: 0px"/>
                {!! getFrase("menu_nicolas",session("lang"), "Nicolás Miranda") !!}
            </a>
        </li>
        <li style="text-align: center">
            <a href="{{URL::to('robinsson')}}" class="menuGuias {{ $selected == 'robinsson' ? 'menuGuiasSelected' : '' }}">
                <img src="{!!  URL::asset('assets/images/equipo/robinsson.PNG')  !!}" style="width: 100%;margin: 0px"/>
                {!! getFrase("menu_robinsson",session("lang"), "Robinsson Solari") !!}
            </a>
        </li>
        <li style="text-align: center">
            <a href="{{URL::to('fabricio')}}" class="menuGuias {{ $selected == 'fabricio' ? 'menuGuiasSelected' : '' }}">
                <img src="{!!  URL::asset('assets/images/equipo/fabricio.PNG')  !!}" style="width: 100%;margin: 0px"/>
                {!! getFrase("menu_fabricio",session("lang"), "Fabricio Erazo") !!}
            </a>
        </li>
        <li style="text-align: center">
            <a href="{{URL::to('ignacio')}}" class="menuGuias {{ $selected == 'ignacio' ? 'menuGuiasSelected' : '' }}">
                <img src="{!!  URL::asset('assets/images/equipo/ignacio.PNG')  !!}" style="width: 100%;margin: 0px"/>
                {!! getFrase("menu_ignacio",session("lang"), "Ignacio Espinosa") !!}
            </a>
        </li>
    </ul>
</div>