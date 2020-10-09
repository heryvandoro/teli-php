<?php

namespace Teli\LookUp\Builders;

use Teli\LookUp\Contracts\LookUpBuilderInterface;
use Teli\Shared\HttpClient;

class LookUpBuilder implements  LookUpBuilderInterface{
    private $httpClient;

    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function ownership($number)
    {
        return $this->httpClient->make('GET','https://lrn.teleapi.net/lookup',[
            'number'=> $number
        ]);
    }

    public function CNAM($number)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/dids/cnam/lookup',[
            'number'=> $number
        ]);
    }
}