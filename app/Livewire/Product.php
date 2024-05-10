<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Product extends Component
{
    public $product;
    public $title;
    public $categoryLink;

    public function mount($cat) {
        $year = Carbon::now()->format('Y');
        if ($cat == 'all') {
            $this->product = DB::table('units')
            ->where('year_mc',$year)
            ->groupBy('model_name')
            ->get();
        } else {
            $this->product = DB::table('units')
            ->where([
                ['year_mc',$year],
                ['category',$cat]
            ])
            ->groupBy('model_name')
            ->get();
        }

        $this->categoryLink = DB::table('units')
        ->where('year_mc',$year)
        ->groupBy('category')
        ->get();

        $this->title = ($cat == 'all') ? 'All Products' : $cat ;
    }

    public function render()
    {
        $data = $this->product;
        $category = $this->categoryLink;
        $title = $this->title;
        return view('livewire.product', compact('data', 'category', 'title'))->title($title);
    }
}
