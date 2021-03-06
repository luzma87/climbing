<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Validator;

    class Frase extends Model implements AuthenticatableContract {
        use Authenticatable;

        public static $rules = [
            'codigo' => 'required',
            'contenido' => 'required',
            'idioma' => 'required',
            'pagina' => 'required'
        ];

        public $errors;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'frases';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['codigo', 'contenido', 'idioma', 'pagina'];

        public function isValid() {
            $validation = Validator::make($this->attributes, static::$rules);
            if ($validation->passes()) {
                return true;
            }
            $this->errors = $validation->messages();
            return false;
        }

        public function scopePagina($query, $pagina) {
            return $query->wherePagina($pagina);
        }

        public function scopeIdioma($query, $idiomaCod) {
            $idioma = Idioma::where("codigo", $idiomaCod)->get()->first()->id;
            return $query->whereIdioma($idioma);
        }

        public function scopeCodigo($query, $cod) {
            return $query->whereCodigo($cod);
        }
    }