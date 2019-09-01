<?php

namespace App\Http\Repositories;

use GuzzleHttp\Client;

class AuthorRepository extends HttpBaseRepository {

    function __construct(Client $client) {
        $this->client = $client;
        $this->jsonUrl = 'json/authors.json';
    }

}
