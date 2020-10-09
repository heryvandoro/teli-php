<?php

namespace Teli\Emergency\Contracts;

interface EmergencyBuilderInterface{
    /**
     * Add 911 address to a phone number
     * @param $payload {Object} 911 record information
     * @return mixed
     */
    public function createRecord($payload);

    /**
     * Look up the address on file (or lack thereof) for a phone number
     * @param $did_id {Number} 911 record ID
     *                  If did_number not sent
     * @param $did_number {Number} 911 record number
     *                      If did_id not sent
     * @return mixed
     */
    public function lookupRecord($did_id, $did_number);

    /**
     * Retrieves the entire list of 911 records on the users account
     * @param $all {Boolean} You can choose to retrieves the entire list or not all
     * @return mixed
     */
    public function listRecord($all= null);

    /**
     * Update 911 emergency records
     * @param $did_id {Number} 911 record ID
     * @param $payload {Object} 911 record information
     * @return mixed
     */
    public function updateRecord($did_id, $payload);

    /**
     * Remove all 911 information from a phone number
     * @param $did_id {Number} 911 record ID
     * @return mixed
     */
    public function removeRecord($did_id);

    /**
     * Validate an address before trying to create or update
     * @param $payload {Object} 911 record information you want to validate
     * @return mixed
     */
    public function validateRecord($payload);

    /**
     * Create a new 911 alert group
     * @param $group_name {String} Group name of alert group
     * @return mixed
     */
    public function createAlertGroup($group_name);

    /**
     * Create a new 911 alert group
     * @return mixed
     */
    public function listAlertGroup();

    /**
     * Get all 911 alert group information associated with a 911 entry
     * @param $payload {Object} 911 group information
     * @return mixed
     */
    public function lookupAlertGroup($payload);

    /**
     * Permanently remove all 911 alert group information and endpoints
     *         Any connected 911 addresses will be left intact
     * @param $group_id {Number} Group ID
     * @return mixed
     */
    public function removeAlertGroup($group_id);

    /**
     * Associate a 911 alert group with a 911 entry
     *      Groups can be associated with multiple 911 entries,
     *      but a 911 entry can only be associated with one group
     * @param $payload {Object} Associating information
     * @return mixed
     */
    public function assignNumberToAlertGroup($payload);

    /**
     * Unassociate a 911 Alert Group from a 911 entry
     * @param $payload {Object} Unassociating information
     * @return mixed
     */
    public function unAssignNumberToAlertGroup($payload);

    /**
     * Add an endpoint to a group
     *      When a 911 call is made from an associated 911 entry,
     *      this endpoint will be notified in the appropriate way
     * @param $group_id {Number} Group ID
     * @param $payload {Object} Notification information
     * @return mixed
     */
    public function addNotificationToAlertGroup($group_id, $payload);

    /**
     * Remove an endpoint from a 911 alert group
     * @param $endpoint_id {Number} Endpoint ID can be found with the /groups/list or /groups/get commands
     * @return mixed
     */
    public function removeNotifyFromAlertGroup($endpoint_id);
}