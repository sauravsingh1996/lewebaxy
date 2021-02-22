<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class user extends Controller
{
    //
    public function userlist(Request $request,$page=null){
    	$client = new Client();
        if(isset($request->page)){
            //echo $request->page;
            $url1="https://gorest.co.in/public-api/users?page={$request->page}";
            $response = $client->request('GET',$url1);
        }
        else{
            $response = $client->request('GET', 'https://gorest.co.in/public-api/users');
        }
    	$statusCode = $response->getStatusCode();
    	$body = json_decode($response->getBody()->getContents(),true);
    	//dd($body);
    	$data=$body["data"];
    	return view("userlist",$body);
    	//dd($body);

    }
}
 