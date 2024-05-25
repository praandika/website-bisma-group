<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/zhiscontact";
        $response = $client->request('GET', $url);
        $content = json_decode($response->getBody()->getContents(), true);
        $data = $content['data'];
        return view('livewire.contact', compact('data'))->title('Contact');
    }
}
