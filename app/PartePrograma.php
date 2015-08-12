<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Validator;

    class PartePrograma extends Model implements AuthenticatableContract {
        use Authenticatable;

        public static $rules = [
            'programa_id' => 'required',
            'orden' => 'required'
        ];

        public $errors;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'partesPrograma';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['programa_id',
                               'orden',
                               'foto',
                               'tipoDificultad_id'];

        public function programa() {
            return $this->belongsTo('App\Programa');
        }

        public function frases() {
            return $this->hasMany('App\FrasePartePrograma');
        }

        public function scopePorPrograma($query, $id) {
            return $query->whereProgramaId($id);
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
