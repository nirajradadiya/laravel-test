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

    public function postData()
    {
        $client = $this->getClient();
        $r = $client->request('POST', config('global.supadata.postData'), [
            'body' => $this->getBody()
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

    public function getBody()
    {
        return json_encode(config('global.params.body'));
    }
}
