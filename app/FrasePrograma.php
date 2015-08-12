<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Validator;

    class FrasePrograma extends Model implements AuthenticatableContract {
        use Authenticatable;

        public static $rules = [
            'idioma' => 'required',
            'programa_id' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required'
        ];

        public $errors;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'frasesPrograma';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['idioma',
                               'programa_id',
                               'nombre',
                               'descripcion',
                               'logistica',
                               'itinerario',
                               'recomendaciones',
                               'requisitos',
                               'llevar',
                               'incluye',
                               'noIncluye',
                               'costo'];

        public function programa() {
            return $this->belongsTo('App\Programa');
        }

        public function isValid() {
            $validation = Validator::make($this->attributes, static::$rules);
            if ($validation->passes()) {
                return true;
            }
            $this->errors = $validation->messages();
            return false;
        }

        public function scopeIdioma($query, $idiomaCod) {
            $idioma = Idioma::where("codigo", $idiomaCod)->get()->first()->id;
            return $query->whereIdioma($idioma);
        }

        public function scopePorPrograma($query, $programa) {
            return $query->whereProgramaId($programa);
        }
    }