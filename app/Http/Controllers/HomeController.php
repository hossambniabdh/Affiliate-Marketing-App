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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {




        if (Auth::user()->image != 'null'  || Auth::user()->is_admin == 1) {
            return redirect('/users');
        } else {
            return view('pic');
            return redirect('/complete');
        }
    }
}
