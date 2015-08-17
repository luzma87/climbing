<?php
    /**
     * Created by IntelliJ IDEA.
     * User: luz
     * Date: 05/08/15
     * Time: 09:13 AM
     */

    use App\Frase;
    use App\FraseFoto;

    function getFrase($codigo, $idioma, $default = '') {
        $frase = Frase::codigo($codigo)->idioma($idioma)->get()->first();
        $default = "-DEF-" . $default;
        return $frase ? $frase->contenido : $default;
    }

    function getFrasesFoto($fotoId, $idiomaCodigo, $defaultTitulo = '', $defaultDescripcion = '') {
        $frase = FraseFoto::porFoto($fotoId)->idioma($idiomaCodigo)->get()->first();
        return Array(
            "titulo" => $frase ? $frase->titulo : $defaultTitulo,
            "descripcion" => $frase ? $frase->descripcion : $defaultDescripcion,
        );
    }

    function getTituloFoto($fotoId, $idiomaCodigo, $default = '') {
        $frase = FraseFoto::porFoto($fotoId)->idioma($idiomaCodigo)->get()->first();
        return $frase ? $frase->titulo : $default;
    }

    function getDescripcionFoto($fotoId, $idiomaCodigo, $default = '') {
        $frase = FraseFoto::porFoto($fotoId)->idioma($idiomaCodigo)->get()->first();
        return $frase ? $frase->descripcion : $default;
    }

    function getTituloOrDescripcionFoto($fotoId, $idiomaCodigo, $default = '') {
        $frase = FraseFoto::porFoto($fotoId)->idioma($idiomaCodigo)->get()->first();
        return $frase ? ($frase->titulo ? $frase->titulo : ($frase->descripcion ? $frase->descripcion : $default)) : $default;
    }