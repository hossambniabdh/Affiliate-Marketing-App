<?php

namespace App\Http\Controllers;

use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {



        $data = \DB::table('Views')->first();
        $total_view = $data->Views;


        if ($request->new_view == 1) {
            $total_view = $total_view + 1;


            $total_view = \DB::table('Views')
                ->update(
                    [
                        'Views' => $total_view,

                    ]
                );
        }


        if (Auth::user()->image != "null") {

            return view('users')->with('data',  $data);
        } else {
            return redirect('/pic');
        }
    }
}
