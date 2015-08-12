<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Validator;

    class TipoDificultad extends Model implements AuthenticatableContract {
        use Authenticatable;

        public static $rules = [
        ];

        public $errors;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'tiposDificultad';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [];

        public function frases() {
            return $this->hasMany('App\FraseTipoDificultad');
        }

        public function isValid() {
            $validation = Validator::make($this->attributes, static::$rules);
            if ($validation->passes()) {
                return true;
            }
            $this->errors = $validation->messages();
            return false;
        }

    }
