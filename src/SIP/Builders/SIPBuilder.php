<?php

namespace Teli\SIP\Builders;

use Teli\SIP\Contracts\SIPBuilderInterface;
use Teli\Shared\HttpClient;

class SIPBuilder implements SIPBuilderInterface{
    private $httpClient;

    public function __construct(HttpClient $httpClient){
        $this->httpClient = $httpClient;
    }

    public function createAccount($payload)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/sipaccounts/create', $payload);
    }

    public function listAccount()
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/sipaccounts/list');
    }

    public function updateAccount($payload)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/sipaccounts/update', $payload);
    }

    public function removeAccount($sipaccount_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/sipaccounts/remove',[
            'sipaccount_id' => $sipaccount_id
        ]);
    }
}