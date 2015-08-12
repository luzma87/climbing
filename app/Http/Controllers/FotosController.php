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

        public function doUpload($foto, $file) {
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
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index() {
            $search = Input::get("search");
            if ($search) {
                $fotos = $this->foto
                    ->where("galeria", "like", '%' . $search . '%')
                    ->orderBy("galeria", "asc")
                    ->get();
            } else {
                $fotos = $this->foto->where("id", ">", 0)->orderBy("galeria", "asc")->get();
            }

            return view('fotos.index', ['fotos' => $fotos, 'search' => $search]);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Response
         */
        public function create() {
            return view('fotos.create');
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
                return Redirect::route('fotos.index')->with('message', 'Foto creada');
            }
        }

        /**
         * Display the specified resource.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function show($id) {
            $foto = $this->foto->whereId($id)->first();
            return view('fotos.show', ['foto' => $foto]);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function edit($id) {
            $foto = $this->foto->whereId($id)->first();
            return view('fotos.edit', ['foto' => $foto]);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  Request $request
         * @param  int $id
         *
         * @return Response
         */
        public function update(Request $request, $id) {
            $foto = $this->foto->whereId($id)->first();
            $this->rules = Foto::$rules;
            $this->validate($request, $this->rules);

            $input = array_except(Input::all(), array('_method', 'path'));
            $foto->update($input);
            File::delete($foto->path);
            $file = $request->file('path');
            $this->doUpload($foto, $file);

            $redirectme = Input::get('redirectme');
            if ($redirectme && $redirectme != "") {
                return Redirect::to($redirectme)->with('message', 'Foto actualizada');
            } else {
                return Redirect::route('fotos.index')->with('message', 'Foto actualizada');
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
            File::delete($foto->path);
            $foto->delete();

            $redirectme = Input::get('redirectme');
            if ($redirectme && $redirectme != "") {
                return Redirect::to($redirectme)->with('message', 'Foto eliminada.');
            } else {
                return Redirect::route('fotos.index')->with('message', 'Foto eliminada.');
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
         * Show the ajax form for editing the specified resource.
         *
         * @return \Illuminate\View\View
         */
        public function editAjax() {
            $id = Input::get("id");
            $redirectme = Input::get("redirectme");
            $foto = $this->foto->whereId($id)->get()->first();
            return view('fotos.editAjax', ['foto' => $foto, "redirectme" => $redirectme]);
        }
    }
