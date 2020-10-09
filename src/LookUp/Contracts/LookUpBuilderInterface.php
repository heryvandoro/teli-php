<?php

namespace Teli\LookUp\Contracts;

interface LookUpBuilderInterface{
    /**
     * Lookup LRN information for a provided number
     * @param $number {Number} Number
     * @return mixed
     */
    public function ownership($number);

    /**
     * Query the Caller ID Name for a provided number
     * @param $number {Number} Number
     * @return mixed
     */
    public function CNAM($number);
}