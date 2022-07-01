<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusController extends Controller
{
    public function home()
    {
        if (Auth::user()->is_admin == 1) {
            $users_data = \DB::table('users')->select('name', 'email', 'created_at', 'total_income', 'total_expeses', 'balance')->where('is_admin', '=', null)->get();
            return view('admin')->with('users_data', $users_data);
        } else {
            return redirect('/views');
        }
    }
}
