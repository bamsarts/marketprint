<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\CurlHandler;


class LocationController extends Controller
{
    public $base_uri = "http://localhost:8001/api/";

    public $header = ['Accept' => 'application/json'];

    public function search(Request $r){

        $handler = new CurlHandler();
        $stack = HandlerStack::create($handler);
        $client = new Client([
            'base_uri' => $this->base_uri,],[
            'handler' => $stack
        ]);

        $header2 = [
            'Accept' => 'application/json',
            'Authorization' => 'Bearer'. session('token')
        ];

        $dataheader = $client->post('location/'.$r->kota,['http_errors' => false, 'headers' => $this->header]);
        $body = $dataheader->getbody();

        $profil = $client->get('profile/',['http_errors' => false, 'headers' => $header2])->getBody();

        $jasaPrint = $client->get('jasaprint/',['http_errors' => false, 'headers' => $this->header])->getBody();

        $result = json_decode($body, true);
        $profilResult = json_decode($profil, true);
        $jasaPrintResult = json_decode($jasaPrint, true);

        // return $jasaPrintResult;

        // return $profilResult['data']['username'];

        $datas = array('data' => $profilResult);

        if ($result == 0) {

            $errora = 'kota tidak tersedia';
            return view('page.maps', ['data' => $errora ]);
        }

        else{

             \JavaScript::put([
                'lat' => $result['data'][0]['lat'],
                'lang' => $result['data'][0]['lang'],
                'profil' => $profilResult['data']['username'],
                'kertas' => $jasaPrintResult,
            ]);

            return view('page.maps');
        }
    	
    }


    public function getJasaPrint(){

        $handler = new CurlHandler();
        $stack = HandlerStack::create($handler);
        $client = new Client([
            'base_uri' => $this->base_uri,],[
            'handler' => $stack
        ]);

        $data = $client->get('jasaprint/',['http_errors' => false, 'headers' => $this->header]);
        $status = $data->getStatusCode();
        $body = $data->getBody();

        $result = json_decode($body, true);

        if ($status == 200) {

            \JavaScript::put([

            ]);
        }

        

    }
}
