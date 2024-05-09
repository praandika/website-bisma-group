<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        $year = Carbon::now()->format('Y');
        $data = DB::table('units')
        ->where('year_mc',$year)
        ->groupBy('model_name')
        ->get();
        return view('livewire.product', compact('data'))->title('Product');
    }
}
