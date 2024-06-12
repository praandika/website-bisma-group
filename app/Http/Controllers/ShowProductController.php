<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class ShowProductController extends Controller
{
    public function show($model) {
        $client = new Client();
        $url = "http://sibisma.yamahabismagroup.com/public/api/zhismodeldetail/$model";
        $response = $client->request('GET', $url);
        $content = json_decode($response->getBody()->getContents(), true);
        $data = $content['data'];

        $title = str_replace('_', ' ', $model);
        $price = $data[0]['price'];
        $model = $data[0]['model_name'];

        $colorClient = new Client();
        $colorUrl = "http://sibisma.yamahabismagroup.com/public/api/zhiscolor/$model";
        $colorResponse = $colorClient->request('GET', $colorUrl);
        $colorContent = json_decode($colorResponse->getBody()->getContents(), true);
        $color = $colorContent['data'];

        $imageClient = new Client();
        $imageUrl = "http://sibisma.yamahabismagroup.com/public/api/zhisimage/$model";
        $imageResponse = $imageClient->request('GET', $imageUrl);
        $imageContent = json_decode($imageResponse->getBody()->getContents(), true);
        $image = $imageContent['data'];
        for ($i=0; $i < count($image); $i++) { 
            array_push($image[$i], $image[$i]['index'] = $i);
        }

        $dealerClient = new Client();
        $dealerUrl = "http://sibisma.yamahabismagroup.com/public/api/zhisavailable/$model";
        $dealerResponse = $dealerClient->request('GET', $dealerUrl);
        $dealerContent = json_decode($dealerResponse->getBody()->getContents(), true);
        $dealer = $dealerContent['data'];

        $acolorClient = new Client();
        $acolorUrl = "http://sibisma.yamahabismagroup.com/public/api/zhisavailablecolor/$model";
        $acolorResponse = $acolorClient->request('GET', $acolorUrl);
        $acolorContent = json_decode($acolorResponse->getBody()->getContents(), true);
        $acolor = $acolorContent['data'];

        $mesinClient = new Client();
        $mesinUrl = "http://sibisma.yamahabismagroup.com/public/api/zhisspecmesin/$model";
        $mesinResponse = $mesinClient->request('GET', $mesinUrl);
        $mesinContent = json_decode($mesinResponse->getBody()->getContents(), true);
        $mesin = ($mesinContent['data'] != null) ? json_decode($mesinContent['data'][0]['mesin'], true) : 'No data available' ;

        $rangkaClient = new Client();
        $rangkaUrl = "http://sibisma.yamahabismagroup.com/public/api/zhisspecrangka/$model";
        $rangkaResponse = $rangkaClient->request('GET', $rangkaUrl);
        $rangkaContent = json_decode($rangkaResponse->getBody()->getContents(), true);
        $rangka = ($rangkaContent['data'] != null) ? json_decode($rangkaContent['data'][0]['rangka'], true) : 'No data available' ;

        $dimensiClient = new Client();
        $dimensiUrl = "http://sibisma.yamahabismagroup.com/public/api/zhisspecdimensi/$model";
        $dimensiResponse = $dimensiClient->request('GET', $dimensiUrl);
        $dimensiContent = json_decode($dimensiResponse->getBody()->getContents(), true);
        $dimensi = ($dimensiContent['data'] != null) ? json_decode($dimensiContent['data'][0]['dimensi'], true) : 'No data available' ;

        $kelistrikanClient = new Client();
        $kelistrikanUrl = "http://sibisma.yamahabismagroup.com/public/api/zhisspeckelistrikan/$model";
        $kelistrikanResponse = $kelistrikanClient->request('GET', $kelistrikanUrl);
        $kelistrikanContent = json_decode($kelistrikanResponse->getBody()->getContents(), true);
        $kelistrikan = ($kelistrikanContent['data'] != null) ? json_decode($kelistrikanContent['data'][0]['kelistrikan'], true) : 'No data available' ;

        return view('page', compact('data', 'price','title','color','model','image','mesin','rangka','dimensi','kelistrikan','dealer','acolor'));
    }
}
