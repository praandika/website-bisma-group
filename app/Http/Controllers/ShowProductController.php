<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ShowProductController extends Controller
{
    public function show($model) {
        $year = Carbon::now()->format('Y');
        $data = DB::table('units')
        ->where([
            ['year_mc', $year],
            ['model_name', str_replace('_', ' ', $model)]
        ])
        ->groupBy('model_name')
        ->get();

        $category = DB::table('units')
        ->where('year_mc',$year)
        ->groupBy('category')
        ->get();

        $title = str_replace('_', ' ', $model);

        return view('page', compact('data', 'category'));
    }
}
