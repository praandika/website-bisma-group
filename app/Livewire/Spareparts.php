<?php

namespace App\Livewire;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Spareparts extends Component
{
    public $parts;
    public $title;
    public $categoryLink;

    public function mount($cat) {
        if ($cat == 'all') {
            $client = new Client();
            $url = "http://sibisma.yamahabismagroup.com/public/api/zhisparts";
            $response = $client->request('GET', $url);
            $content = json_decode($response->getBody()->getContents(), true);
            $this->parts = $content['data'];
        } else {
            $client = new Client();
            $url = "http://sibisma.yamahabismagroup.com/public/api/zhisparts/".$cat;
            $response = $client->request('GET', $url);
            $content = json_decode($response->getBody()->getContents(), true);
            $this->parts = $content['data'];
        }

        $this->title = ($cat == 'all') ? 'All Sparts' : $cat ;
    }

    public function render()
    {
        $data = $this->parts;
        $title = $this->title;
        return view('livewire.spareparts', compact('data', 'title'))->title($title);
    }
}
