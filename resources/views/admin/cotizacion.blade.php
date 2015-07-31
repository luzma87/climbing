@extends('layouts.defaultAdmin')

@section('title', 'Cotización')

@section('header')
    <style type="text/css">
        .done {
            background : #499249;
        }

        .disabled {
            background : #555;
        }
    </style>
@stop

@section('content')
    <table class="table table-condensed table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Página</th>
                <th>Características</th>
                <th>Web</th>
                <th>Móvil</th>
                <th>Admin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="">Inicio</td>
                <td class="">Página dinámica que incluye una sección de administración, protegida por usuario y
                             contraseña, para
                             actualizar los contenidos.
                </td>
                <td class="web"></td>
                <td class="mov"></td>
                <td class="ad"></td>
            </tr>
            <tr>
                <td class="">Nosotros</td>
                <td class="">Página estática</td>
                <td class="web"></td>
                <td class="mov"></td>
                <td class="ad disabled"></td>
            </tr>
            <tr>
                <td class="">Ecuador país mega diverso</td>
                <td class="">Página dinámica que incluye una sección de administración, protegida por usuario y
                             contraseña, para
                             actualizar los contenidos.
                </td>
                <td class="web"></td>
                <td class="mov"></td>
                <td class="ad"></td>
            </tr>
            <tr>
                <td class="">Nuestros programas</td>
                <td class="">Página dinámica que incluye una sección de administración, protegida por usuario y
                             contraseña, para
                             actualizar, ingresar o borrar programas
                </td>
                <td class="web"></td>
                <td class="mov"></td>
                <td class="ad"></td>
            </tr>
            <tr>
                <td class="">Recomendaciones</td>
                <td class="">Página dinámica que incluye una sección de administración, protegida por usuario y
                             contraseña, para
                             actualizar, ingresar o borrar salidas
                </td>
                <td class="web"></td>
                <td class="mov"></td>
                <td class="ad"></td>
            </tr>
            <tr>
                <td class="">Noticias</td>
                <td class="">Página dinámica que incluye una sección de administración, protegida por usuario y
                             contraseña, para
                             actualizar los contenidos.
                </td>
                <td class="web"></td>
                <td class="mov"></td>
                <td class="ad"></td>
            </tr>
            <tr>
                <td class="">Contacto</td>
                <td class="">Página estática, con un formulario de contacto para el envío de emails</td>
                <td class="web"></td>
                <td class="mov"></td>
                <td class="ad disabled"></td>
            </tr>
            <tr>
                <td class="">Comentarios</td>
                <td class="">Página donde los visitantes pueden dejar sus comentarios. Incluye una sección de
                             administración
                             protegida por usuario y contraseña para gestionar los comentarios.
                </td>
                <td class="web"></td>
                <td class="mov"></td>
                <td class="ad"></td>
            </tr>
            <tr>
                <td class="">Galería de fotos</td>
                <td class="">Página dinámica que incluye una sección de administración, protegida por usuario y
                             contraseña, para
                             actualizar los contenidos.
                </td>
                <td class="web"></td>
                <td class="mov"></td>
                <td class="ad"></td>
            </tr>
            <tr>
                <td class="">Mapa del sitio</td>
                <td class="">Página dinámica que muestra el mapa del sitio</td>
                <td class="web"></td>
                <td class="mov"></td>
                <td class="ad disabled"></td>
            </tr>
        </tbody>
    </table>
@stop