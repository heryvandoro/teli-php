<?php

namespace Teli\LNP\Builders;

use Teli\LNP\Contracts\LnpBuilderInterface;
use Teli\Shared\HttpClient;

class LnpBuilder implements LnpBuilderInterface{
    private $httpClient;

    public function __construct(HttpClient $httpClient){
        $this->httpClient = $httpClient;
    }

    public function createOrder($payload)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/lnp/create', $payload);
    }

    public function listOrder()
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/lnp/list');
    }

    public function getSpecificInformation($request_id){
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/lnp/get',[
            'request_id'=> $request_id
        ]);
    }

    public function checkNumberPortability($numbers)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/lnp/check', [
            'numbers'=> $numbers
        ]);
    }

    public function bulkCheckNumberPortability($numbers)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/lnp/check/portability/bulk',[
            'numbers'=> $numbers
        ]);
    }

    public function submitSignature($request_id, $signature)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/lnp/signature/submit',[
            'request_id'=> $request_id,
            'signature'=> $signature
        ]);
    }

    public function requestCSVList($request_id){
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/lnp/request/csv', $request_id);
    }
}