<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class userProfileCtrl extends Controller
{
    public function index()
    {
        //dd(auth()->user()->id);
        $id = auth()->user()->id;
        $user = User::where('id',$id)->first();
        return view('frontend.profile.index',compact('user'));
    }
}
