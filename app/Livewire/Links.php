<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class Links extends Component
{
    public function render()
    {
        $catClient = new Client();
        $url = "http://127.0.0.1:8000/api/zhiscat/";
        $response = $catClient->request('GET', $url);
        $content = json_decode($response->getBody()->getContents(), true);
        $category = $content['data'];

        return view('livewire.links', compact('category'));
    }
}
