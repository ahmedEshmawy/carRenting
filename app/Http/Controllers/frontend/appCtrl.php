<?php

namespace App\Http\Controllers\frontend;
use App\car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class appCtrl extends Controller
{
    public function index()
    {
        $cars = car::inRandomOrder()->where('status',1)->get();
        return view('frontend.layouts.index',compact('cars'));
    }

   
    public function vehicle()
    {
        return view('frontend.pages.vehicle');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
