<?php

namespace Teli\User\Contracts;

interface UserBuilderInterface{
    /**
     * Retrieve a list of aggregate costs and totals for the master account for a child account
     * @param $payload {Object} Criteria
     * @return mixed
     */
    public function getBillingDetailSummary($payload);

    /**
     * Update account information
     * @param $payload {Object} Account information you want to update
     * @return mixed
     */
    public function updateAccountInfo($payload);

    /**
     * Update password
     * @param $payload {Object} Current and new password
     * @return mixed
     */
    public function updatePassword($payload);

    /**
     * Update branding
     * @param $payload {Object} Branding information you want to update
     * @return mixed
     */
    public function updateBranding($payload);

    /**
     * Create a sub user
     * @param $payload {Object} Sub user information
     * @return mixed
     */
    public function createSubUser($payload);

    /**
     * Get a list of all of your sub users
     * @return mixed
     */
    public function listSubUser();

    /**
     * Update sub user
     * @param $subuser_id {Number} Sub user ID
     * @param $payload {Object} Sub user information you want to change
     * @return mixed
     */
    public function updateSubUser($subuser_id, $payload);

    /**
     * Remove sub user
     * @param $subuser_id {Number} Sub user ID
     * @return mixed
     */
    public function removeSubUser($subuser_id);

    /**
     * Update fraud setting
     * @param $payload {Object} Fraud setting information
     * @return mixed
     */
    public function updateFraudSettings($payload);

    /**
     * Removes the whitelabeled CSS from the users account
     * @return mixed
     */
    public function removeCSS();

    /**
     * Removes the whitelabeled Logo from the users account
     * @return mixed
     */
    public function removeLogo();

    /**
     * Configures the inbound SMS POST URL
     * @param $url {String} SMS URL
     * @return mixed
     */
    public function setSMSUrl($url);

    /**
     * Configures the web hook URL
     * @param $url {String} Webhook URL
     * @return mixed
     */
    public function setWebHookUrl($url);

    /**
     * Controls the SMS delivery notification URL
     * @param $url {String} SMS delivery URL
     * @return mixed
     */
    public function setSMSDeliveryUrl($url);

    /**
     * Set affiliate Paypal
     * @param $address {String} Paypal address
     * @return mixed
     */
    public function setAffiliatePaypal($address);

    /**
     * Reset sub user password
     * @param $subuser_id {Number} Sub user ID
     * @param $new_password {String} New password
     * @return mixed
     */
    public function resetSubUserPassword($subuser_id, $new_password);

    /**
     * List sub user security groups
     * @param $subuser_id {Number} Sub user ID
     * @return mixed
     */
    public function listSubUserSecurityGroups($subuser_id);

    /**
     * Returns the number of outbound channels (not channel group channels) currently in use
     * @return mixed
     */
    public function outboundChannelCount();

    /**
     * Retrieves the invoice for the time period between the start and end dates
     * @param $payload {Object} Time periods
     * @return mixed
     */
    public function getInvoice($payload);

    /**
     * Retrieves the invoice for the time period between the start and end dates
     *      The invoice data will be delivered to the supplied email address.
     * @param $payload {Object} Time period and email information
     * @return mixed
     */
    public function getInvoiceByEmail($payload);

    /**
     * Retrieves the current balance on the account
     * @return mixed
     */
    public function getBalance();

    /**
     * Retrieves the current balance on the account with additional account details
     * @return mixed
     */
    public function getDetailedBalance();

    /**
     * Transaction list
     * @param $payload {Object} For pagination
     * @return mixed
     */
    public function listTransactions($payload);

    /**
     * Retrieves the transaction details for the requested transaction_id
     * @param $transaction_id {Number} Transaction ID
     * @return mixed
     */
    public function getTransactionItems($transaction_id);
}