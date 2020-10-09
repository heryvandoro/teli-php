<?php

namespace Teli\MMS\Builders;

use Teli\MMS\Contracts\MMSBuilderInterface;
use Teli\Shared\HttpClient;

class MMSBuilder implements MMSBuilderInterface {
    private $httpClient;

    public function __construct(HttpClient $httpClient) {
        $this->httpClient = $httpClient;
    }

    public function sendUrl($payload)
    {
        return $this->httpClient->make('GET', 'https://sms.teleapi.net/mms/send', $payload);
    }

    public function sendEmbedded($payload)
    {
        return $this->httpClient->make('POST', 'https://sms.teleapi.net/mms/send', $payload);
    }
}