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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        if($this->middleware('role:ROLE_SUPERADMIN')){
            return view('superadmin.home');
        }
        if($this->middleware('role:ROLE_ADMIN')){
            return view('admin.home');
        }
        if($this->middleware('role:ROLE_USER')){
            return view('user.home');
        }
        else{
            return view('home');
        }
    }
}
