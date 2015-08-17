<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Illuminate\Support\Facades\File;
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
                               'resumen',
                               'descripcion',
                               'logistica',
                               'itinerario',
                               'recomendaciones',
                               'requisitos',
                               'llevar',
                               'llevarFile',
                               'incluye',
                               'noIncluye',
                               'costo'];

        public static function boot() {
            parent::boot();

            // cause a delete of a product to cascade to children so they are also deleted
            static::deleting(function ($frase) {
                File::delete($frase->llevarFile);
            });
        }

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