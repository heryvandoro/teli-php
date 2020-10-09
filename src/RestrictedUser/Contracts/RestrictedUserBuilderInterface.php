<?php

namespace Teli\RestrictedUser\Contracts;

interface RestrictedUserBuilderInterface{
    /**
     * Create a restricted user
     * @param $payload {Object} Restricted user information
     * @return mixed
     */
    public function createUser($payload);

    /**
     * Get info about a restricted user
     * @param $ruser_id {Number} Restricted user ID
     * @return mixed
     */
    public function getUser($ruser_id);

    /**
     * Get info about a restricted user
     * @return mixed
     */
    public function listUser();

    /**
     * Update restricted user
     * @param $ruser_id {Number} Restricted user ID
     * @param $payload {Object} Restricted user information you want to change
     * @return mixed
     */
    public function updateUser($ruser_id, $payload);

    /**
     * Enable users that have a user_status of "inactive-disabled"
     * @param $ruser_id {Number} Restricted user ID
     * @return mixed
     */
    public function enableUser($ruser_id);

    /**
     * Disable users that have a user_status of "active"
     * @param $ruser_id {Number} Restricted user ID
     * @return mixed
     */
    public function disableUser($ruser_id);

    /**
     * Get a specified user's rates
     * @param $ruser_id {Number} Restricted user ID
     * @return mixed
     */
    public function listUserRates($ruser_id);

    /**
     * Allocate a given number of dollars to the user's account
     * @param $ruser_id {Number} Restricted user ID
     * @param $amount {Number} Amount to be allocated
     * @return mixed
     */
    public function fundUser($ruser_id, $amount);

    /**
     * List the permission groups that are available to you to assign to a restricted user
     * @return mixed
     */
    public function listPermissionGroups();

    /**
     * List all the permission groups that are assigned to a specific restricted user
     * @param $ruser_id {Number} Restricted user ID
     * @return mixed
     */
    public function listPermissionUser($ruser_id);

    /**
     * Add or remove a permission group from a restricted user
     * @param $ruser_id {Number} Restricted user ID
     * @param $group_id {Number} Group ID
     * @param $enabled {Boolean} Passing enable status
     * @return mixed
     */
    public function setSecurityGroup($ruser_id, $group_id, $enabled);

    /**
     * Set rates for a restricted user
     * @param $ruser_id {Number} Restricted user ID
     * @param $rates {String} Rates for a restricted user in JSON string
     * @return mixed
     */
    public function updateUserRates($ruser_id, $rates);

    /**
     * Set the credit line for a restricted user
     * @param $ruser_id {Number} Restricted user ID
     * @param $credit_line Credit line rates for restricted user
     * @return mixed
     */
    public function setCreditLine($ruser_id, $credit_line);

    /**
     * Send a password reset email to restricted user, using their account email address
     * @param $ruser_id {Number} Restricted user ID
     * @return mixed
     */
    public function resetPassword($ruser_id);

    /**
     * Updates the Whitelabel options for a restricted user
     * @param $ruser_id {Number} Restricted user ID
     * @param $payload {Object} Branding information ID
     * @return mixed
     */
    public function updateBranding($ruser_id, $payload);

    /**
     * Attempts to remove the custom whitelabel CSS file
     * @param $ruser_id {Number} Restricted user ID
     * @return mixed
     */
    public function removeCSS($ruser_id);

    /**
     * Attempts to remove the custom whitelabel logo
     * @param $ruser_id {Number} Restricted user ID
     * @return mixed
     */
    public function removeLogo($ruser_id);

    /**
     * Retrieve a restricted user's API token
     *      for use when managing their account directly
     * @param $ruser_id {Number} Restricted user ID
     * @return mixed
     */
    public function getToken($ruser_id);

    /**
     * Enable the ability to add and manage offnet numbers
     * @param $ruser_id {Number} Restricted user ID
     * @return mixed
     */
    public function enableOffnet($ruser_id);

    /**
     * Mark an account as post paid
     * @param $ruser_id {Number} Restricted user ID
     * @return mixed
     */
    public function setPostpay($ruser_id);

    /**
     * Set inbound and outbound channel limits for a restricted user
     * @param $ruser_id {Number} Restricted user ID
     * @param $inbound {Number} Inbound channel limits
     * @param $outbound {Number} Outbound channel limits
     * @return mixed
     */
    public function setChannelLimits($ruser_id, $inbound, $outbound);
}