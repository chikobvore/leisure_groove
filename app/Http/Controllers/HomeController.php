<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_SUPERADMIN');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        if(Auth::user()->myRole == 1){
            return view('superadmin.home');
        }
        if(Auth::user()->myRole == 2){
            return view('admin.home');
        }
        if(Auth::user()->myRole == 3){
            return view('user.home');
        }
        else{
            return view('/');
        }
    }
    
}
