<?php

namespace Teli\IP\Builders;

use Teli\IP\Contracts\IPBuilderInterface;
use Teli\Shared\HttpClient;

class IPBuilder implements IPBuilderInterface{
    private $httpClient;

    public function __construct(HttpClient $httpClient){
        return $this->httpClient = $httpClient;
    }

    public function createEndpoint($payload)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/ipendpoints/create', $payload);
    }

    public function listEndpoint()
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/ipendpoints/list');
    }

    public function removeEndpoint($endpoint_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/ipendpoints/remove',[
            'endpoint_id'=> $endpoint_id
        ]);
    }
}