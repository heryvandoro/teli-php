<?php

namespace Teli\SMS\Contracts;
use Teli\SMS\Models\SendSMSDto;

interface SMSBuilderInterface {
    public function send(SendSMSDto $payload);
}