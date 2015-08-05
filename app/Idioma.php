<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Validator;

    class Idioma extends Model implements AuthenticatableContract {
        use Authenticatable;

        public static $rules = [
            'codigo' => 'required',
            'nombre' => 'required'
        ];

        public $errors;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'idiomas';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['codigo', 'nombre', 'bandera'];

        public function isValid() {
            $validation = Validator::make($this->attributes, static::$rules);
            if ($validation->passes()) {
                return true;
            }
            $this->errors = $validation->messages();
            return false;
        }

    }
