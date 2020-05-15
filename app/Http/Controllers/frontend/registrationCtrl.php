<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class registrationCtrl extends Controller
{
    public function index()
    {
        return view('frontend.registration.signup');
    }

    public function store(Request $request)
    {
        //validate the user
        $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'password'=>'required |min:6 | confirmed'
        ]);
        //save the data
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->email)
        ]);
        
        //sign the user in
        auth()->login($user);
        //redirect
        return redirect('user/profile');
    }
}
