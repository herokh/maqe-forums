<?php

namespace App\Http\Repositories;

use GuzzleHttp\Client;
use Illuminate\Support\Collection;
 
abstract class HttpBaseRepository {

    protected $client;
    protected $jsonUrl;

    function __construct (Client $client) {
        $this->client = $client;
    }

    public function get() {
        $json = $this->client->get($this->jsonUrl)->getBody();
        return \collect(\json_decode($json));
    }

}
