<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view('page');
    }

    public function search(Request $param) {
        $year = Carbon::now()->format('Y');
        $data =  DB::table('units')
        ->where([
            ['year_mc',$year],
            ['model_name', 'like', '%'.$param->search.'%']
        ])
        ->get();
        $title = $param->search;
        return view('page', compact('data', 'title'));
    }
}
