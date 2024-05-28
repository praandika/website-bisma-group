<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view('page');
    }

    public function search(Request $request) {
        $parameter = [
            'search' => $request->search
        ];

        $client = new Client();
        $url = "http://127.0.0.1:8000/api/zhissearch";
        $response = $client->request('POST', $url, [
            'headers' => ['Content-type'=>'application/json'],
            'body' => json_encode($parameter)
        ]);
        $content = json_decode($response->getBody()->getContents(), true);
        $data = $content['data'];
        $title = $request->search;
        
        return view('page', compact('data', 'title'));
    }

    public function searchSpart(Request $request) {
        $parameter = [
            'search' => $request->search
        ];

        $client = new Client();
        $url = "http://127.0.0.1:8000/api/zhissearchspart";
        $response = $client->request('POST', $url, [
            'headers' => ['Content-type'=>'application/json'],
            'body' => json_encode($parameter)
        ]);
        $content = json_decode($response->getBody()->getContents(), true);
        $data = $content['data'];
        $title = $request->search;
        
        return view('page', compact('data', 'title'));
    }

    public function searchJob(Request $request) {
        $parameter = [
            'search' => $request->search
        ];

        $client = new Client();
        $url = "http://127.0.0.1:8000/api/zhissearchjob";
        $response = $client->request('POST', $url, [
            'headers' => ['Content-type'=>'application/json'],
            'body' => json_encode($parameter)
        ]);
        $content = json_decode($response->getBody()->getContents(), true);
        $data = $content['data'];
        $title = $request->search;
        
        return view('page', compact('data', 'title'));
    }
}
