<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Validator;

    class Programa extends Model implements AuthenticatableContract {
        use Authenticatable;

        public static $rules = [
            'grupoPrograma_id' => 'required',
            'codigo' => 'required',
            'nombre' => 'required',
            'itinerario' => 'required',
            'descripcion' => 'required',
            'recomendaciones' => 'required',
            'requisitos' => 'required',
            'llevar' => 'required',
            'incluye' => 'required',
            'noIncluye' => 'required'
        ];

        public $errors;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'programas';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['grupoPrograma_id',
                               'codigo',
                               'nombre',
                               'graduacion', //en los de 1 solo dia
                               'logistica', //en los de varios dias
                               'dificultad', //en los de varios dias
                               'itinerario',
                               'descripcion',
                               'recomendaciones',
                               'requisitos',
                               'llevar',
                               'incluye',
                               'noIncluye',
                               'costo'];

        public function grupoPrograma() {
            return $this->belongsTo('App\GrupoPrograma');
        }

        public function dias() {
            return $this->hasMany('App\DiaPrograma');
        }

        public function scopePorGrupoPrograma($query, $id) {
            return $query->whereGrupoProgramaId($id);
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
