<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class LinkSpareparts extends Component
{
    public function render()
    {
        $catClient = new Client();
        $url = "http://sibisma.yamahabismagroup.com/public/api/zhispartcat/";
        $response = $catClient->request('GET', $url);
        $content = json_decode($response->getBody()->getContents(), true);
        $category = $content['data'];

        return view('livewire.link-spareparts', compact('category'));
    }
}
