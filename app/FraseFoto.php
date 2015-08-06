<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Validator;

    class FraseFoto extends Model implements AuthenticatableContract {
        use Authenticatable;

        public static $rules = [
            'idioma' => 'required',
            'foto' => 'required'
        ];

        public $errors;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'frasesFoto';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['titulo', 'descripcion', 'idioma', 'foto'];

        public function foto() {
            return $this->belongsTo('App\Foto');
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

        public function scopeFoto($query, $foto) {
            return $query->whereFoto($foto);
        }
    }