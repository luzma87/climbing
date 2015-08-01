<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Frase extends Model {
        public function scopeIdioma($query, $idiomaCod) {
            $idioma = Idioma::where("codigo", $idiomaCod)->get()->first()->id;
            return $query->whereIdioma($idioma);
        }

        public function scopeCodigo($query, $cod) {
            return $query->whereCodigo($cod);
        }
    }