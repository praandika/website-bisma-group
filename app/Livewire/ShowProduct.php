<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowProduct extends Component
{
    public function render()
    {
        $data = DB::table('unit')
        ->where([
            ['year', $year]
        ])
        return view('livewire.show-product');
    }
}
