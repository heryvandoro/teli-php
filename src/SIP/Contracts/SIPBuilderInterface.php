<?php

namespace Teli\SIP\Contracts;

interface SIPBuilderInterface{
    /**
     * Create a sip account
     * @param $payload {Object} Sip Account information
     * @return mixed
     */
    public function createAccount($payload);

    /**
     * Get a list of all of you sip accounts you have with us
     * @return mixed
     */
    public function listAccount();

    /**
     * Update a sip account
     * @param $payload {Object} Sip account information
     *          All fields are required, so if they're not changing just send back what is already there
     * @return mixed
     */
    public function updateAccount($payload);

    /**
     * Remove a sip account
     * @param $sipaccount_id {Number} Sip account number
     * @return mixed
     */
    public function removeAccount($sipaccount_id);
}