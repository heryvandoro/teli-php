<?php

namespace Teli\SMS\Builders;

use Teli\Shared\HttpClient;
use Teli\SMS\Contracts\SMSBuilderInterface;

class SMSBuilder implements SMSBuilderInterface {
    private $httpClient;

    public function __construct(HttpClient $httpClient) {
        $this->httpClient = $httpClient;
    }

    public function send($payload)
    {
        return $this->httpClient->make('GET', 'https://api.teleapi.net/sms/send', $payload);
    }

    public function getRecords($start_date, $end_date, $filter = [])
    {
        return $this->httpClient->make('GET', 'https://api.teleapi.net/sms/records', $filter);
    }
}