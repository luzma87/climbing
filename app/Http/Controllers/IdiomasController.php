<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    use App\Idioma;

    use Hash;
    use Auth;
    use Illuminate\Support\Facades\File;
    use Input;
    use Illuminate\Support\Facades\Redirect;

    class IdiomasController extends Controller {
        protected $idioma;
        protected $rules;

        public function __construct(Idioma $idioma) {
            $this->middleware('auth');
            $this->idioma = $idioma;
        }

        private function doUpload($idioma, $file) {
            $destinationPath = "assets/idiomas";
            $fileName = "";
            if ($file && $file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $fileName = Input::get('codigo') . "." . $extension;
                $file->move($destinationPath, $fileName);
            }
            if ($fileName != "") {
                $idioma->bandera = $destinationPath . "/" . $fileName;
                $idioma->save();
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
                $idiomas = $this->idioma
                    ->where("codigo", "like", '%' . $search . '%')
                    ->orWhere("nombre", "like", '%' . $search . '%')
                    ->get();
            } else {
                $idiomas = $this->idioma->all();
            }
            return view('idiomas.index', ['idiomas' => $idiomas, 'search' => $search]);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Response
         */
        public function create() {
            return view('idiomas.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  Request $request
         * @return Response
         */
        public function store(Request $request) {
            $this->rules = Idioma::$rules;
            $this->validate($request, $this->rules);

            $input = Input::all();
            Idioma::create($input);
            $file = $request->file('bandera');
            $idioma = $this->idioma->whereCodigo(Input::get("codigo"))->first();
            $this->doUpload($idioma, $file);

            return Redirect::route('adminIdiomas.index')->with('message', 'Idioma creado');
        }

        /**
         * Display the specified resource.
         *
         * @param  int $id
         * @return Response
         */
        public function show($id) {
            $idioma = $this->idioma->whereCodigo($id)->first();
            return view('idiomas.show', ['idioma' => $idioma]);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         * @return Response
         */
        public function edit($id) {
            $idioma = $this->idioma->whereCodigo($id)->first();
            return view('idiomas.edit', ['idioma' => $idioma]);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  Request $request
         * @param  int $id
         * @return Response
         */
        public function update(Request $request, $id) {
            $idioma = $this->idioma->whereCodigo($id)->first();
            $this->rules = Idioma::$rules;
            $this->validate($request, $this->rules);

            $input = array_except(Input::all(), array('_method', 'bandera'));
            $idioma->update($input);
            File::delete($idioma->bandera);
            $file = $request->file('bandera');
            $this->doUpload($idioma, $file);

            return Redirect::route('adminIdiomas.index')->with('message', 'Idioma actualizado.');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         * @return Response
         */
        public function destroy($id) {
            $idioma = $this->idioma->whereCodigo($id)->first();
            $idioma->delete();

            return Redirect::route('adminIdiomas.index')->with('message', 'Idioma eliminado.');
        }
    }
