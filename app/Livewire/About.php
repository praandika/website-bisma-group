<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/zhisabout";
        $response = $client->request('GET', $url);
        $content = json_decode($response->getBody()->getContents(), true);
        $data = $content['data'];

        return view('livewire.about', compact('data'))->title('About Us');
    }
}
