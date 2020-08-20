<?php

namespace Teli\SMS\Builders;

use Teli\Base\Builders\BaseBuilder;
use Teli\SMS\Contracts\SMSBuilderInterface;
use Teli\sms\models\SendSMSDto;

class SMSBuilder extends BaseBuilder implements SMSBuilderInterface {
    public function send(SendSMSDto $payload)
    {
        return $this->httpClient->send('GET', '');
    }
}