<?php

namespace Teli\Base\Builders;
use GuzzleHttp\Client;

class BaseBuilder {
    protected $httpClient;

    public function __construct(Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }
}