<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    use App\User;

    use Hash;
    use Auth;
    use Input;
    use Illuminate\Support\Facades\Redirect;

    class UsersController extends Controller {
        protected $user;
        protected $rules;

        public function __construct(User $user) {
            $this->middleware('auth');
            $this->user = $user;
        }

        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index() {
            $search = Input::get("search");
//            $users = $this->user->all();
            if ($search) {
                $users = $this->user
                    ->where("name", "like", '%' . $search . '%')
                    ->orWhere("email", "like", '%' . $search . '%')
                    ->get();
            } else {
                $users = $this->user->all();
            }
            return view('users.index', ['users' => $users, 'search' => $search]);
        }


        /**
         * Show the form for creating a new resource.
         *
         * @return Response
         */
        public function create() {
            return view('users.create');
        }


        /**
         * Store a newly created resource in storage.
         *
         * @param  Request $request
         * @return Response
         */
        public function store(Request $request) {
//        $validation = Validator::make(Input::all(), User::$rules);
//        if($validation->fails()) {
//            return Redirect::back()->withInput()->withErrors($validation->messages());
//        }
//        $input = Input::all();
//            $this->user->email = Input::get('email');
//            $this->user->password = Hash::make(Input::get('password'));
//            if (!$this->user->isValid()) {
//                return Redirect::back()->withInput()->withErrors($this->user->errors);
//            }
//            $this->user->save();
//        $user = new User;
//        $user->username = Input::get('username');
//        $user->password = Hash::make(Input::get('passowrd'));
//        $user->save();
//        return Redirect::to('/users');s
//            return Redirect::route('users.index');

            $this->rules = User::$rules;
            $this->validate($request, $this->rules);

            $input = array_except(Input::all(), array('_method', 'password', 'password2'));
            $pass = Input::get('passowrd');
            if ($pass && $pass !== "") {
                $input["password"] = Hash::make($pass);
            }
            User::create($input);

            return Redirect::route('adminUsers.index')->with('message', 'Usuario creado');
        }


        /**
         * Display the specified resource.
         *
         * @param $username
         *
         * @return Response
         */
        public function show($email) {
            $user = $this->user->whereEmail($email)->first();
            return view('users.show', ['user' => $user]);
        }


        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function edit($mail) {
            $user = $this->user->whereEmail($mail)->first();
            return view('users.edit', ['user' => $user]);
        }


        /**
         * Update the specified resource in storage.
         *
         * @param Request $request
         * @param  int $id
         * @return Response
         */
        public function update(Request $request, $mail) {
            $user = $this->user->whereEmail($mail)->first();
            $this->rules = User::$rules;
            $this->validate($request, $this->rules);

            $input = array_except(Input::all(), array('_method', 'password', 'password2'));
            $pass = Input::get('passowrd');
            if ($pass && $pass !== "") {
                $input["password"] = Hash::make($pass);
            }
            $user->update($input);

            return Redirect::route('adminUsers.index')->with('message', 'Usuario actualizado.');
        }


        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function destroy($mail) {
            $user = $this->user->whereEmail($mail)->first();
            $user->delete();

            return Redirect::route('adminUsers.index')->with('message', 'Usuario eliminado.');
        }
    }
