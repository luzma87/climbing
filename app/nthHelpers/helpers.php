<?php
    /**
     * Created by IntelliJ IDEA.
     * User: luz
     * Date: 05/08/15
     * Time: 09:13 AM
     */

    use app\Frase;

    function getFrase($codigo, $idioma, $default = '') {
        $frase = Frase::codigo($codigo)->idioma($idioma)->get()->first();
        return $frase ? $frase->contenido : $default;
    }