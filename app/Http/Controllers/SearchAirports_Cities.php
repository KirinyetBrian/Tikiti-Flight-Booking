<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchAirports_Cities extends Controller
{
    public function __invoke(Request $request, Client $client)
    {
        $url = 'https://test.api.amadeus.com/v1/reference-data/locations';
        if (session('access_token')) {
            $access_token = session('access_token');
        } else {
            $access_token = json_decode(app('App\Http\Controllers\AccessTokenController')->__invoke($client))->access_token;
            session(['access_token' => $access_token]);
        }

        $data=[
            'subType'=>$request->SubType,
            'keyword'=>$request->keyword,
            'countryCode'=>$request->countryCode,

        ];


        try {
            $response = $client->post($url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . $access_token
                ],
                'json' => $data
            ]);
            $response = $response->getBody();
            $response = json_decode($response);
            return view('confirm')->with('Airports', $response->data);
        } catch (GuzzleException $exception) {
            return $exception->getMessage();
        }
    }
}
