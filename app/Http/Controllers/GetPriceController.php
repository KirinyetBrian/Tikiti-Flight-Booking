<?php
namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
class GetPriceController extends Controller
{
    public function __invoke (Request $request, Client $client)
    {
        $url = 'https://test.api.amadeus.com/v1/shopping/flight-offers/pricing';
        $access_token = 'xxxxxxxxxx';

        try {
            $response = $client->post($url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . $access_token
                ],
                'json' => $data
            ]);
            return $response->getBody();
        } catch (GuzzleException $exception) {
            return $exception->getMessage();
        }
    }
}
