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

        $mesin = new Client();
        $mesinUrl = "http://127.0.0.1:8000/api/zhisspecmesin/$model";
        $mesinResponse = $mesin->request('GET', $mesinUrl);
        $mesinContent = json_decode($mesinResponse->getBody()->getContents(), true);
        $mesin = json_decode($mesinContent['data'][0]['mesin'], true);

        $rangka = new Client();
        $rangkaUrl = "http://127.0.0.1:8000/api/zhisspecrangka/$model";
        $rangkaResponse = $rangka->request('GET', $rangkaUrl);
        $rangkaContent = json_decode($rangkaResponse->getBody()->getContents(), true);
        $rangka = json_decode($rangkaContent['data'][0]['rangka'], true);

        $dimensi = new Client();
        $dimensiUrl = "http://127.0.0.1:8000/api/zhisspecdimensi/$model";
        $dimensiResponse = $dimensi->request('GET', $dimensiUrl);
        $dimensiContent = json_decode($dimensiResponse->getBody()->getContents(), true);
        $dimensi = json_decode($dimensiContent['data'][0]['dimensi'], true);

        $kelistrikan = new Client();
        $kelistrikanUrl = "http://127.0.0.1:8000/api/zhisspeckelistrikan/$model";
        $kelistrikanResponse = $kelistrikan->request('GET', $kelistrikanUrl);
        $kelistrikanContent = json_decode($kelistrikanResponse->getBody()->getContents(), true);
        $kelistrikan = json_decode($kelistrikanContent['data'][0]['kelistrikan'], true);

        return view('page', compact('data', 'price','title','color','model','image','mesin','rangka','dimensi','kelistrikan'));
    }
}
