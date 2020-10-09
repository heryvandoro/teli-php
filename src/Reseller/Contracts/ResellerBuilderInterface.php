<?php

namespace Teli\Reseller\Contracts;

interface ResellerBuilderInterface{
    /**
     * Create a reseller
     * @param $payload {Object} Reseller information
     * @return mixed
     */
    public function create($payload);

    /**
     * Get info on the requested reseller
     * @param $reseller_id {Number} Reseller ID
     * @return mixed
     */
    public function get($reseller_id);

    /**
     * Retrieves a list of all your resellers
     * @return mixed
     */
    public function listReseller();

    /**
     * Enable resellers that have a user_status of "inactive-disabled"
     * @param $reseller_id {Number} Reseller ID
     * @return mixed
     */
    public function enableAccount($reseller_id);

    /**
     * Disable resellers that have a user_status of "active"
     * @param $reseller_id {Number} Reseller ID
     * @return mixed
     */
    public function disableAccount($reseller_id);

    /**
     * Get a specified reseller's rates
     * @param $reseller_id {Number} Reseller ID
     * @return mixed
     */
    public function showRates($reseller_id);

    /**
     * Allocate a given number of dollars to the resellers "account"
     * @param $reseller_id {Number} Reseller ID
     * @param $amount {Number} Amount to be allocated
     * @return mixed
     */
    public function addFunds($reseller_id, $amount);

    /**
     * Update reseller account
     * @param $id {Number} Reseller ID
     * @param $payload {Object} Reseller information you want to update
     * @return mixed
     */
    public function updateAccount($id, $payload);

    /**
     * Assign a phone number to a particular reseller or customer
     * @param $did_id {Number} Phone ID
     * @param $new_user_id {Number} Any of your resellers/customers or your own user id
     * @return mixed
     */
    public function reassignNumberToResellerOrCustomer($did_id, $new_user_id);

    /**
     * Set a reseller's branding
     * @param $reseller_id {Number} Reseller ID
     * @param $payload {Object} Branding information
     * @return mixed
     */
    public function updateBranding($reseller_id, $payload);

    /**
     * Remove the provided CSS file for a reseller
     * @param $reseller_id {Number} Reseller ID
     * @return mixed
     */
    public function removeCSS($reseller_id);

    /**
     * Remove the provided logo for a reseller
     * @param $reseller_id {Number} Reseller ID
     * @return mixed
     */
    public function removeLogo($reseller_id);

    /**
     * Update a reseller's rates
     * @param $reseller_id {Number} Reseller ID
     * @param $rates {String} Reseller rates in JSON string
     * @return mixed
     */
    public function updateRates($reseller_id, $rates);

    /**
     * Set the credit line for a reseller
     *      They will be allowed to go this far negative on their balance
     * @param $reseller_id {Number} Reseller ID
     * @param $credit_line {Number} Credit line
     * @return mixed
     */
    public function setCreditLine($reseller_id, $credit_line)           ;

    /**
     * Update a reseller's rates
     * @param $reseller_id {Number} Reseller ID
     * @return mixed
     */
    public function resetPassword($reseller_id);

    /**
     * Retrieve a reseller's API token when managing their account directly
     * @param $reseller_id {Number} Reseller ID
     * @return mixed
     */
    public function getToken($reseller_id);

    /**
     * Enable the ability to add and manage offnet numbers
     * @param $reseller_id {Number} Reseller ID
     * @return mixed
     */
    public function enableOffnet($reseller_id);

    /**
     * Set inbound and outbound channel limits for a reseller
     * @param $reseller_id {Number} Reseller ID
     * @param $inbound {Number} Inbound channel limits
     * @param $outbound {Number} Outbound channel limits
     * @return mixed
     */
    public function setChannelLimits($reseller_id, $inbound, $outbound);
}