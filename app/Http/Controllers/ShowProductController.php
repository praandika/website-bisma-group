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

        $price = DB::table('units')
        ->where([
            ['year_mc', $year],
            ['model_name', str_replace('_', ' ', $model)]
        ])
        ->groupBy('model_name')
        ->pluck('price');

        $category = DB::table('units')
        ->where('year_mc',$year)
        ->groupBy('category')
        ->get();

        $title = str_replace('_', ' ', $model);
        $price = $price[0];

        return view('page', compact('data', 'price', 'category','title'));
    }
}
