<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class Job extends Component
{
    public $product;
    public $title;

    public function mount($cat) {
        if ($cat == 'all') {
            $client = new Client();
            $url = "http://sibisma.yamahabismagroup.com/public/api/zhisjob";
            $response = $client->request('GET', $url);
            $content = json_decode($response->getBody()->getContents(), true);
            $this->product = $content['data'];
        } else {
            $client = new Client();
            $url = "http://sibisma.yamahabismagroup.com/public/api/zhisjob/".$cat;
            $response = $client->request('GET', $url);
            $content = json_decode($response->getBody()->getContents(), true);
            $this->product = $content['data'];
        }
        $this->title = ($cat == 'all') ? 'All Jobs' : $cat ;
    }
    
    public function render()
    {
        $data = $this->product;
        $title = $this->title;
        return view('livewire.job', compact('data', 'title'))->title($title);
    }
}
