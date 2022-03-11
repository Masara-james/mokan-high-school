<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome'); 
    }
    public function student()
    {
        return view('admin.students');
    }
}
/*$usertype= Auth::user()->usertype;
       if ($usertype==1) {
         return view('admin.admin'); 
       }else{
         return view('home',compact("data","data1"));
       }*/