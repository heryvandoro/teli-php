<?php

namespace Teli\SMS\Builders;

use Teli\Shared\HttpClient;
use Teli\SMS\Contracts\SMSBuilderInterface;
use Teli\sms\models\SendSMSDto;

class SMSBuilder implements SMSBuilderInterface {
    private $httpClient;

    public function __construct(HttpClient $httpClient) {
        $this->httpClient = $httpClient;
    }

    public function send($payload)
    {
        return $this->httpClient->make('GET', 'sms/send', $payload);
    }
}