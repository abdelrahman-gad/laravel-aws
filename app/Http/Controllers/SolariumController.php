<?php

namespace App\Http\Controllers;

use Exception as GlobalException;
// use Solarium\Client;
// use Solarium\Exception;
// use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
class SolariumController extends Controller
{
    protected $client;

    // public function __construct(Client $client)
    // {
    //     // $this->client = $client;
    // }

    public function ping()
    {

        // $client = new Client();
        $response = Http::get('http://localhost:8983/solr/customers/select?indent=true&q.op=OR&q=*%3A*&rows=20&wt=json');
        dd($response->json());
        // dd($customers->getBody());
        // create a ping query
        // $ping = $this->client->createPing();

        // // execute the ping query
        // try {
        //     $this->client->ping($ping);
        //     return response()->json('OK');
        // } catch (GlobalException $e) {

        //     dd($e->getMessage());
        //     return response()->json('ERROR', 500);
        // }
    }
}
