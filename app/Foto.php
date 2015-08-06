<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Validator;


    class Foto extends Model implements AuthenticatableContract {
        use Authenticatable;

        public static $rules = [
            'path' => 'required',
            'galeria' => 'required'
        ];

        public $errors;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'fotos';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['path', 'galeria'];

        public function frases() {
            return $this->hasMany('App\FraseFoto');
        }

        public function isValid() {
            $validation = Validator::make($this->attributes, static::$rules);
            if ($validation->passes()) {
                return true;
            }
            $this->errors = $validation->messages();
            return false;
        }

        public function scopeGaleria($query, $galeria) {
            return $query->whereGaleria($galeria);
        }
    }
