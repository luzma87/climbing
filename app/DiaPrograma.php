<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Validator;

    class DiaPrograma extends Model implements AuthenticatableContract {
        use Authenticatable;

        public static $rules = [
            'programa_id' => 'required',
            'nombre' => 'required',
            'resumen' => 'required',
            'descripcion' => 'required'
        ];

        public $errors;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'diasPrograma';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['programa_id',
                               'nombre',
                               'resumen',
                               'pathFoto',
                               'descripcion'];

        public function programa() {
            return $this->belongsTo('App\Programa');
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
