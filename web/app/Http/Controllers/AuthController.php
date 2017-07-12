<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\CurlHandler;

class AuthController extends Controller
{

	public $base_uri = "http://localhost:8001/api/";

    public function register(Request $request){


    	$datapost = [
    		'username' => $request->username,
    		'email' => $request->email,
    		'password' => $request->password,
    	];


    	$client = new Client(['base_uri' => $this->base_uri]);
    	$res = $client->post('register',['header' => ['Content-Type' => 'application/json'], 'json' => $datapost]);
    	$statcode = $res->getStatusCode();
    	$body = $res->getBody();

    	if ($statcode == 200) {
    		return redirect('/notification');
    	}else{
    		
    	}

    }

    public function login(Request $request){

        $datapost = [
            'email' => $request->username,
            'password' => $request->password,
        ];

        $handler = new CurlHandler();
        $stack = HandlerStack::create($handler);
        $client = new Client(['base_uri' => $this->base_uri,],['handler' => $stack]);
        $res = $client->post(
            'login',['http_errors' => false,
            'header',['Content-Type' => 'application/json'],
            'json' => $datapost]);
        $statcode = $res->getStatusCode();
        $body = $res->getBody();

        if ($statcode == 401 || $statcode == 400){
            return redirect('/')->with('message_notif_fail','Kombinasi Email Password salah');
        }elseif($statcode == 403){
            return "Konfirmasi email anda terlebih dahulu";
        }elseif($statcode == 404){
            return redirect('/')->with('message_notif','Email dan Password itu perlu');
        }else{
            $arraybody = json_decode($body,true);
            session(['token' => $arraybody['token']]);
            setcookie('id', $arraybody['id']);
            return redirect('/')->with('message_notif','Berhasil Login');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/')->with('message_notif','Berhasil Logout');
    }
}	