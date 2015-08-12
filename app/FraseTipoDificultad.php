<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Validator;

    class FraseTipoDificultad extends Model implements AuthenticatableContract {
        use Authenticatable;

        public static $rules = [
            'idioma' => 'required',
            'tipoDificultad_id' => 'required',
            'codigo' => 'required',
            'descripcion' => 'required'
        ];

        public $errors;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'frasesTipoDificultad';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['codigo',
                               'descripcion',
                               'idioma',
                               'tipoDificultad_id'];

        public function dificultad() {
            return $this->belongsTo('App\TipoDificultad');
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

        public function scopePorTipoDificultad($query, $dificultad) {
            return $query->whereTipoDificultadId($dificultad);
        }
    }