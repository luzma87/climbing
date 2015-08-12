<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Validator;

    class FraseGrupoPrograma extends Model implements AuthenticatableContract {
        use Authenticatable;

        public static $rules = [
            'idioma' => 'required',
            'grupoPrograma_id' => 'required',
            'nombre' => 'required',
            'nombreMenu' => 'required'
        ];

        public $errors;

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'frasesGrupoPrograma';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['nombre',
                               'nombreMenu',
                               'idioma',
                               'grupoPrograma_id'];

        public function grupo() {
            return $this->belongsTo('App\GrupoPrograma');
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

        public function scopePorGrupoPrograma($query, $grupo) {
            return $query->whereGrupoProgramaId($grupo);
        }
    }