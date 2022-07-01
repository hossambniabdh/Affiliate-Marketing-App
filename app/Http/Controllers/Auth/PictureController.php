<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PictureController extends Controller
{

    public function index(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|mimes:JPEG,PNG,jpg|max:5000',

        ]);
        $filename = $request->image->getClientOriginalName();
        $request->image->storeAs('images', $filename, 'public');
        Auth()->user()->update(['image' => $filename]);
        if (Auth::user()->image != "null") {
            return redirect('/users');
        }
    }
}
