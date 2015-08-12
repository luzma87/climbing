<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Validator;

    class FrasePartePrograma extends Model implements AuthenticatableContract {
        use Authenticatable;

        public static $rules = [
            'idioma' => 'required',
            'partePrograma_id' => 'required',
            'nombre' => 'required',
            'resumen' => 'required'
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
                               'partePrograma_id',
                               'nombre',
                               'resumen',
                               'descripcion'];

        public function partePrograma() {
            return $this->belongsTo('App\PartePrograma');
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

        public function scopePorPartePrograma($query, $parte) {
            return $query->whereParteProgramaId($parte);
        }
    }