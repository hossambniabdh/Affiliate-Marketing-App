<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;

class ChartController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function LineChart()
    {

        $data = \DB::table('users')->selectRaw('DATE(created_at) as x, COUNT(*) as y')
            ->groupBy('x')
            ->where('created_at', '>', Carbon::now()->subDays(14))
            ->get();

        $result[] = ['x', 'y'];
        foreach ($data as $key => $value) {
            $result[++$key] = [$value->x, (int)$value->y];
        }

        return view('Chart', compact('result'));
    }
}
