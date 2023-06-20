<?php

namespace App\Services;

use Illuminate\Database\DatabaseManager;
use GuzzleHttp\Client as GuzzleClient;

class ApiService
{
    public function __construct(DatabaseManager $database)
    {
        $this->db = $database;
    }

    public function postData($request)
    {
        $client = $this->getClient();
        $r = $client->request('POST', config('global.supadata.postData'), [
            'body' => $this->getBody($request)
        ]);
        return $response = $r->getBody()->getContents();
    }

    public function getHeader()
    {
        return $headers = ['Content-Type' => 'application/json'];
    }


    public function getClient()
    {
        return $client = new GuzzleClient([
            'headers' => $this->getHeader()
        ]);
    }

    public function getBody($request)
    {
        $request_data = [
            'title' => $request->input('title'),
            'first_name' => $request->input('first_name') 
        ]
        $static_data = config('global.params.body');
        $final_data = array_merge($static_data, $request_data);
        return json_encode($final_data);
    }
}
