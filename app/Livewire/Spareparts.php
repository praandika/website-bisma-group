<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Spareparts extends Component
{
    // public $product;
    // public $title;
    // public $categoryLink;

    // public function mount($cat) {
    //     $year = Carbon::now()->format('Y');
    //     if ($cat == 'all') {
    //         $this->product = DB::table('sparts')
    //         ->where('year_spart',$year)
    //         ->groupBy('spart_name')
    //         ->get();
    //     } else {
    //         $this->product = DB::table('sparts')
    //         ->where([
    //             ['year_spart',$year],
    //             ['category',$cat]
    //         ])
    //         ->groupBy('spart_name')
    //         ->get();
    //     }

    //     $this->categoryLink = DB::table('sparts')
    //     ->where('year_spart',$year)
    //     ->groupBy('category')
    //     ->get();

    //     $this->title = ($cat == 'all') ? 'All Sparts' : $cat ;
    // }

    public function render()
    {
        return view('livewire.spareparts');
    }
}
