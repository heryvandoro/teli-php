<?php

namespace Teli\Customer\Contracts;

interface CustomerBuilderInterface{
    /**
     * Create customer
     * @param $payload {Object} Customer information
     * @return mixed
     */
    public function create($payload);

    /**
     * Get customer detail information
     * @param $customer_id {Number} Customer ID
     * @return mixed
     */
    public function get($customer_id);

    /**
     * List customer
     * @return mixed
     */
    public function listCustomer();

    /**
     * Enable customer account
     * @param $customer_id {Number} Customer ID
     * @return mixed
     */
    public function enableAccount($customer_id);

    /**
     * Disable customer account
     * @param $customer_id {Number} Customer ID
     * @return mixed
     */
    public function disableAccount($customer_id);

    /**
     * Show customer rates
     * @param $customer_id {Number} Customer ID
     * @return mixed
     */
    public function showRates($customer_id);

    /**
     * Add customer funds
     * @param $customer_id {Number} Customer ID
     * @param $amount {Number} Amount
     * @return mixed
     */
    public function addFunds($customer_id, $amount);

    /**
     * Update customer account
     * @param $customer_id {Number} Customer ID
     * @param $payload {Object} Customer information
     * @return mixed
     */
    public function updateAccount($customer_id, $payload);

    /**
     * Update customer branding
     * @param $customer_id {Number} Customer ID
     * @param $payload {Object} Customer information
     * @return mixed
     */
    public function updateBranding($customer_id, $payload);

    /**
     * Remove customer's custom CSS
     * @param $customer_id {Number} Customer ID
     * @return mixed
     */
    public function removeCSS($customer_id);

    /**
     * Remove customer's custom logo
     * @param $customer_id {Number} Customer ID
     * @return mixed
     */
    public function removeLogo($customer_id);

    /**
     * Set a customer's rates
     * @param $customer_id {Number} Customer ID
     * @param $rates {String} Customer's rates in json string
     * @return mixed
     */
    public function updateRates($customer_id, $rates);

    /**
     * Sets the customer's credit line amount
     * @param $customer_id {Number} Customer ID
     * @param $credit_line {Number} Credit line amount
     * @return mixed
     */
    public function setCreditLine($customer_id, $credit_line);

    /**
     * Reset customer's password
     * @param $customer_id {Number} Customer ID
     * @return mixed
     */
    public function resetPassword($customer_id);

    /**
     * Set inbound and outbound channel limits for a customer
     * @param $customer_id {Number} Customer ID
     * @param $payload {Object} Channel limits information
     * @return mixed
     */
    public function setChannelLimits($customer_id, $payload);
}