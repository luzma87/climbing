<?php

    namespace App\Http\Controllers;

    use App\Foto;
    use App\Idioma;
    use App\Frase;
    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    use Auth;
    use Illuminate\Support\Facades\File;
    use Input;
    use Illuminate\Support\Facades\Redirect;

    class FotosController extends Controller {
        protected $foto;
        protected $rules;

        public function __construct(Foto $foto) {
            $this->middleware('auth');
            $this->foto = $foto;
        }

        /**
         * Sube un archivo de imagen al path de la galeria correspondiente y actualiza el path del objeto $foto
         * @param $foto
         * @param $file
         */
        private function doUpload($foto, $file) {
            $destinationPath = "assets/galerias/" . $foto->galeria;
            $fileName = "";
            if ($file && $file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $fileName = $foto->galeria . "_" . date("Ymd_His") . "." . $extension;
                $file->move($destinationPath, $fileName);
            }
            if ($fileName != "") {
                $foto->path = $destinationPath . "/" . $fileName;
                $foto->save();
            }
        }

        /**
         * Show the ajax form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function createAjax() {
            $redirectme = Input::get("redirectme");
            $galeria = Input::get("galeria");
            return view('fotos.createAjax', ["galeria" => $galeria, "redirectme" => $redirectme]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  Request $request
         *
         * @return Response
         */
        public function store(Request $request) {
            $this->rules = Foto::$rules;
            $this->validate($request, $this->rules);

            $input = array_except(Input::all(), array('path'));
            $foto = Foto::create($input);
            $file = $request->file('path');
            $this->doUpload($foto, $file);

            $redirectme = Input::get('redirectme');
            if ($redirectme && $redirectme != "") {
                return Redirect::to($redirectme)->with('message', 'Foto creada');
            } else {
                return Redirect::route('adminFotos.index')->with('message', 'Foto creada');
            }
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function destroy($id) {
            $foto = $this->foto->whereId($id)->first();
            $foto->delete();

            $redirectme = Input::get('redirectme');
            if ($redirectme && $redirectme != "") {
                return Redirect::to($redirectme)->with('message', 'Foto eliminada.');
            } else {
                return Redirect::route('adminFotos.index')->with('message', 'Foto eliminada.');
            }
        }
    }
