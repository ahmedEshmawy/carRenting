<?php

namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminUserCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
 
    public function index()
    {
        return view('backend.admin.login');
    }


    public function store(Request $request)
    {
        //dd($request->all());
        //validate the user
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        //log the user(admin) in
        $fields = $request->only('email','password');
        if(!Auth::guard('admin')->attempt($fields)){
            return back()->withErrors([
                'message'=>'Wrong Email or Password please Try Again'
            ]);
        }
        //session message
        session()->flash('msg','You Logged in Successfully');
        //redirect
        return redirect('admin/dashboard');
    }

    public function logout()
    {
        auth::guard('admin')->logout();
        session()->flash('msg','You have been logged out');
        return redirect('admin/login');
    }

}
