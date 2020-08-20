<?php

namespace Teli;
use GuzzleHttp;

class Teli {
    private $httpClient = null;

    public function __construct() {
        $this->httpClient =  new GuzzleHttp\Client([
            'base_uri' => 'https://api.teleapi.net',
            'timeout'  => 2.0,
        ]);
    }
}