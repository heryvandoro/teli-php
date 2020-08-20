<?php

namespace Teli;
use Teli\Shared\HttpClient;
use Teli\SMS\Builders\SMSBuilder;

class Teli {
    private $httpClient;
    public $sms;

    public function __construct($callApiSIDToken, $apiToken) {
        $this->httpClient = new HttpClient($callApiSIDToken, $apiToken);

        $this->sms = new SMSBuilder($this->httpClient);
    }
}