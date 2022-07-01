<?php

namespace App\Http\Controllers\wallet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class WalletController extends Controller
{
    public  function index()
    {
        if (Auth::user()->is_admin == null) {
            $wallet = \DB::table('users')->select('wallet', 'salary', 'bounses', 'overtime', 'total_income', 'food', 'Drinks', 'shopping', 'total_expeses', 'balance')->where('id', '=', auth::user()->id)->get();

            return view('wallet')->with('wallet', $wallet);
        } else {
            return view('admin');
        }
    }
    public function active(Request $request)
    {

        $active = $request->wallet;
        if ($active == 1) {
            $walet = \DB::table('users')
                ->where('id', '=', auth::user()->id)
                ->update(
                    [
                        'wallet' => $active,

                    ]
                );
        } else {
            $walet = \DB::table('users')
                ->where('id', '=', auth::user()->id)
                ->update(
                    [
                        'wallet' => $active,
                        'salary' => null,
                        'bounses' => null,
                        'overtime' => null,
                        'total_income' => null,
                        'food' => null,
                        'Drinks' => null,
                        'shopping' => null,
                        'total_expeses' => null,
                        'balance' => null,
                    ]
                );
        }
    }
    public function income(Request $request)
    {

        $salary = $request->sal;
        $bounses = $request->bou;
        $overtime = $request->over;
        $total = $request->tot;
        $walet = \DB::table('users')
            ->where('id', '=', auth::user()->id)
            ->update(
                [
                    'salary' => $salary,
                    'bounses' => $bounses,
                    'overtime' => $overtime,
                    'total_income' => $total,
                ]
            );
    }
    public function expenses(Request $request)
    {

        $foo = $request->foo;
        $dri = $request->dri;
        $sho = $request->sho;
        $totalm = $request->totm;
        $walet = \DB::table('users')
            ->where('id', '=', auth::user()->id)
            ->update(
                [
                    'food' => $foo,
                    'Drinks' => $dri,
                    'shopping' => $sho,
                    'total_expeses' => $totalm,
                ]
            );
    }
    public function balance(Request $request)
    {

        $balance = $request->balance;
        $walet = \DB::table('users')
            ->where('id', '=', auth::user()->id)
            ->update(
                [
                    'balance' => $balance,

                ]
            );
    }
}
