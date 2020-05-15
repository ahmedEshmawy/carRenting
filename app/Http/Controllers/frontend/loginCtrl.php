<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class loginCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('frontend.login.index');
    }

    public function store(Request $request)
    {
        //validate the user
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        //check if the user exist
        $data = request(['email','password']);
        if(!auth()->attempt($data))
        {
            return back()->withErrors([
                'message'=>'Wrong Data . please Try Again.'
                ]);
        }
        return redirect('user/profile');
    }

    public function logout()
    {
        auth()->logout();
        session()->flash('msg','You Logged out Successfully');
        return redirect('/user/login');
    }
}
