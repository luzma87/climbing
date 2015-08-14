<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Validator;

    class Programa extends Model implements AuthenticatableContract {
        use Authenticatable;

        public static $rules = [
            'grupo_programa_id' => 'required',
            'codigo' => 'required',
            'tipo' => 'required',
            'orden' => 'orden'
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
        protected $fillable = ['grupo_programa_id',
                               'codigo',
                               'foto',
                               'tipo', //U => un dia, V => varios dias, C => cursos
                               'orden',
                               'tipoDificultad_id'];

        public static function boot() {
            parent::boot();

            // cause a delete of a product to cascade to children so they are also deleted
            static::deleting(function ($programa) {
                $programa->frases()->delete();
                $programa->partes()->delete();
            });
        }

        public function grupoPrograma() {
            return $this->belongsTo('App\GrupoPrograma');
        }

        public function frases() {
            return $this->hasMany('App\FrasePrograma');
        }

        public function partes() {
            return $this->hasMany('App\PartePrograma');
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
