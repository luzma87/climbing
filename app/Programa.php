<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\File;
    use Validator;

    class Programa extends Model implements AuthenticatableContract {
        use Authenticatable;

        public static $rules = [
            'grupo_programa_id' => 'required',
            'codigo' => 'required',
            'tipo' => 'required',
            'orden' => 'required',
            'tipo_dificultad_id' => 'required'
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
                               'tipo', //una => un dia, varias => varios dias, cursos => cursos
                               'orden',
                               'tipo_dificultad_id'];

        public static function boot() {
            parent::boot();

            // cause a delete of a product to cascade to children so they are also deleted
            static::deleting(function ($programa) {

                File::delete($programa->foto);

                $programa->frases()->delete();
                $programa->recomendaciones()->delete();
                $programa->partes()->delete();
            });
        }

        public function idiomas($id) {
            $idiomas = array();
            foreach (DB::select('select distinct idioma from frasesPrograma where programa_id = ?', [$id]) as $idiomaId) {
                $idioma = Idioma::find($idiomaId->idioma)->nombre;
                array_push($idiomas, $idioma);
            }
            return $idiomas;
        }

        public function tipoDificultad() {
            return $this->belongsTo('App\TipoDificultad');
        }

        public function grupoPrograma() {
            return $this->belongsTo('App\GrupoPrograma');
        }

        public function frases() {
            return $this->hasMany('App\FrasePrograma');
        }

        public function recomendaciones() {
            return $this->hasMany('App\RecomendacionPrograma');
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
