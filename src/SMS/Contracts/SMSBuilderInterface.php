<?php

namespace Teli\SMS\Contracts;

interface SMSBuilderInterface {
    public function send($payload);
}