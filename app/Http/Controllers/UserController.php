<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    //Show Register/Create Form
    public function create(){
        return view('users.register');
    }


    public function store(Request $request){
        $formFields = $request->validate([
            'name'=>['required', 'min:3'],
            'email'=>['required', 'email', Rule::unique('users', 'email')],
            'password'=>'required| confirmed|min:6',
            'course1'=>'required',
            'course2'=>'required',
            'course3'=>'required',
            'course4'=>'required',
            'groupslot'=>'required',
        ]);

        //Hash Password
        $formFields['password']=bcrypt($formFields['password']);

        //Create User
        $user = User::create($formFields);

        //Login
        //auth()->login($user);

        return redirect('/group_index')->with('message', 'User Created Successfully!');;
    }

    //Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have Logged Out');
    }

    //Show Login Form
    public function login() {
        return view('users/login');
    }

    //Authenticate
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email'=>['required', 'email'],
            'password'=>'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/group_index')->with('message', 'You are now Logged in!');
        }
        
        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }
}
