<?php

    namespace App;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
    use Illuminate\Support\Facades\File;
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

        public static function boot() {
            parent::boot();

            // cause a delete of a product to cascade to children so they are also deleted
            static::deleting(function ($foto) {
                File::delete($foto->path);
                $foto->frases()->delete();
            });
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
