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

        public function __construct(User $user) {
            $this->user = $user;
        }

        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index() {
            $users = $this->user->all();
            return view('users.index', ['users' => $users]);
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
         * @return Response
         */
        public function store() {
//        $validation = Validator::make(Input::all(), User::$rules);
//        if($validation->fails()) {
//            return Redirect::back()->withInput()->withErrors($validation->messages());
//        }
//        $input = Input::all();
            $this->user->email = Input::get('email');
            $this->user->password = Hash::make(Input::get('password'));
            if (!$this->user->isValid()) {
                return Redirect::back()->withInput()->withErrors($this->user->errors);
            }
            $this->user->save();
//        $user = new User;
//        $user->username = Input::get('username');
//        $user->password = Hash::make(Input::get('passowrd'));
//        $user->save();
//        return Redirect::to('/users');s
            return Redirect::route('users.index');
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
        public function edit($id) {
            //
        }


        /**
         * Update the specified resource in storage.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function update($id) {
            //
        }


        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         *
         * @return Response
         */
        public function destroy($id) {
            //
        }
    }
