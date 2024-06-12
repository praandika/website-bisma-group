<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class Product extends Component
{
    public $product;
    public $title;

    public function mount($cat) {
        if ($cat == 'all') {
            $client = new Client();
            $url = "http://sibisma.yamahabismagroup.com/public/api/zhismodel";
            $response = $client->request('GET', $url);
            $content = json_decode($response->getBody()->getContents(), true);
            $this->product = $content['data'];
        } else {
            $client = new Client();
            $url = "http://sibisma.yamahabismagroup.com/public/api/zhismodel/".$cat;
            $response = $client->request('GET', $url);
            $content = json_decode($response->getBody()->getContents(), true);
            $this->product = $content['data'];
        }

        $this->title = ($cat == 'all') ? 'All Products' : $cat ;
    }

    public function render()
    {
        $data = $this->product;
        $title = $this->title;
        return view('livewire.product', compact('data', 'title'))->title($title);
    }
}
