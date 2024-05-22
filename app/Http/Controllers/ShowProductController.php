<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class ShowProductController extends Controller
{
    public function show($model) {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/zhismodeldetail/$model";
        $response = $client->request('GET', $url);
        $content = json_decode($response->getBody()->getContents(), true);
        $data = $content['data'];

        $title = str_replace('_', ' ', $model);
        $price = $data[0]['price'];
        $model = $data[0]['model_name'];

        $colorClient = new Client();
        $colorUrl = "http://127.0.0.1:8000/api/zhiscolor/$model";
        $colorResponse = $colorClient->request('GET', $colorUrl);
        $colorContent = json_decode($colorResponse->getBody()->getContents(), true);
        $color = $colorContent['data'];

        $imageClient = new Client();
        $imageUrl = "http://127.0.0.1:8000/api/zhisimage/$model";
        $imageResponse = $imageClient->request('GET', $imageUrl);
        $imageContent = json_decode($imageResponse->getBody()->getContents(), true);
        $image = $imageContent['data'];
        for ($i=0; $i < count($image); $i++) { 
            array_push($image[$i], $image[$i]['index'] = $i);
        }

        return view('page', compact('data', 'price','title','color','model','image'));
    }
}
