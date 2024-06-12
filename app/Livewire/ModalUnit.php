<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class ModalUnit extends Component
{
    public function render()
    {
        $client = new Client();
        $url = "http://sibisma.yamahabismagroup.com/public/api/zhismodel";
        $response = $client->request('GET', $url);
        $content = json_decode($response->getBody()->getContents(), true);
        $data = $content['data'];

        return view('livewire.modal-unit', compact('data'));
    }
}
