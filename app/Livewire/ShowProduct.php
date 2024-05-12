<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowProduct extends Component
{
    public $product;
    public $title;
    public $categoryLink;

    public function mount($model) {
        $year = Carbon::now()->format('Y');
        $this->product = DB::table('units')
        ->where([
            ['year_mc', $year],
            ['model_name', str_replace('_', ' ', $model)]
        ])
        ->groupBy('model_name')
        ->get();

        $this->categoryLink = DB::table('units')
        ->where('year_mc',$year)
        ->groupBy('category')
        ->get();

        $this->title = str_replace('_', ' ', $model);
    }

    public function render()
    {
        $data = $this->product;
        $category = $this->categoryLink;
        $title = 'Show '.$this->title;
        return view('livewire.show-product', compact('data', 'category', 'title'))->title($title);
    }
}
