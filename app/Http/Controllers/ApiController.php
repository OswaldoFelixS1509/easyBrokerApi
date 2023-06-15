<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function GuzzleHttp\json_decode;

class ApiController extends Controller
{
    public function index()
    {
        return view('API');
    }

    public function retrieveData(){
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.stagingeb.com/v1/properties', [
            'headers' => [
              'X-Authorization' => 'l7u502p8v46ba3ppgvj5y2aad50lb9',
              'accept' => 'application/json',
            ],
          ]);
         
        $data =  json_decode($response->getBody(), true);
        return response()->json(array($data));
    }
}
