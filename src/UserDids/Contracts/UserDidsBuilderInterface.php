<?php

namespace Teli\UserDids\Contracts;

interface UserDidsBuilderInterface{
    /**
     * List of the phone numbers that you own
     *      Includes those that are owned by your resellers and customers
     * @param $number_type {NumberTypeEnum} Number type
     * @return mixed
     */
    public function listAll($number_type=null);

    /**
     * Retrieve a list of the phone numbers that you own in a simplified format
     * @param $number_type {NumberTypeEnum} Number type
     * @param $limit {Number}
     * @param $offset {Number}
     * @return mixed
     */
    public function listSimple($number_type= null, $limit= null, $offset= null);

    /**
     * Get info related to a single DID number
     * @param $number {Number} Number
     * @return mixed
     */
    public function detail($number);

    /**
     * Remove a phone number from your account
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #"
     * @param $did_number {Number} Phone number
     * @return mixed
     */
    public function remove($did_id, $did_number);

    /**
     * Assign a routing call flow to a specified phone number
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #"
     * @param null $flow_id {Number} Flow ID
     * @return mixed
     */
    public function changeCallFlow($did_id, $flow_id = null);

    /**
     * Assign a phone number to a channel group
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #"
     * @param null $channel_group_id {Number} Channel group ID
     * @return mixed
     */
    public function assignToChannelGroup($did_id, $channel_group_id = null);

    /**
     * Assign a voicemail inbox to a phone number
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #"
     * @param $inbox_id {Number} Pass voicemail_inbox_id of null to remove inbox from did
     * @param $stv {Boolean} If you would like the number to go straight to voicemail (no routing to your PBX or SIP account)
     * @return mixed
     */
    public function assignVoicemailBox($did_id, $inbox_id, $stv= null);

    /**
     * Convert a did from a voice number to a fax number
     *      This will remove any associated call flows, channel groups and voicemail inboxes from the did
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #"
     * @return mixed
     */
    public function convertToFax($did_id);

    /**
     * Convert a did from a fax number to a voice number
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #"
     * @return mixed
     */
    public function convertToVoiceIfFax($did_id);

    /**
     * Enable inbound CNAM lookups for a number
     * @param $payload {Object} Criteria
     * @return mixed
     */
    public function enableCNAM($payload);

    /**
     * Disable inbound CNAM lookups for a number
     * @param $payload
     * @return mixed
     */
    public function disableCNAM($payload);

    /**
     * Change note
     *      Do not pass the note parameter in order to remove a note
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #"
     * @param $note {String} Note
     * @return mixed
     */
    public function changeNoteOnDid($did_id, $note=null);

    /**
     * Removes the note applied to a given did
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #"
     * @return mixed
     */
    public function removeNoteOnDid($did_id);

    /**
     * Retrieve the value submitted for CNAM/LIDB on a number
     *      Returns an empty string if it is not set
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #"
     * @return mixed
     */
    public function showCallerIDSetLIDB($did_id);

    /**
     * Submits a CNAM/LIDB entry for processing on a number
     *      Any charges for CNAM/LIDB services will be charged to your account immediately upon submission
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #"
     * @param $value {String} Caller ID
     * @return mixed
     */
    public function setCallerIDLIDB($did_id, $value);

    /**
     * Set an SMS URL specific to a phone number
     *      This will override the account-wide SMS URL,
     *      messages will be delivered to this URL instead of the account-wide URL
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #"
     * @param $url {String} SMS URL
     * @return mixed
     */
    public function setUrlSMSOnSpecificPhone($did_id, $url);

    /**
     * Remove the phone number specific SMS URL
     *      SMS delivery will revert to the account-wide SMS URL
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #"
     * @return mixed
     */
    public function removeUrlSMS($did_id);

    /**
     * @param $payload
     * @return mixed
     */
    public function setListing($payload);

    /**
     * Set Listing
     * @param $did_id Retrieve the listing that is stored for a number
     * @return mixed
     */
    public function getListing($did_id);

    /**
     * Retrieve the listing that is stored for a number
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #"
     * @return mixed
     */
    public function removeListing($did_id);

    /**
     * Set call forwarding
     * @param $payload {Object} Call forwarding information
     * @return mixed
     */
    public function setCallForwarding($payload);

    /**
     * Get a list of your backorders
     * @param int $limit {Number} Limit of data
     * @param int $offset {Number} Amount of data to be escaped
     * @return mixed
     */
    public function listBackorders($limit = 30, $offset = 0);

    /**
     * Set Delivery URL
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #"
     * @param $dn_url {String} Delivery url
     * @return mixed
     */
    public function setDeliveryURL($did_id, $dn_url);

    /**
     * Returns a list of offnet DIDs
     * @return mixed
     */
    public function listHiddenOffsetDids();

    /**
     * Creates a new call flow
     * @param $payload {Object} Flow information
     * @return mixed
     */
    public function createFlow($payload);

    /**
     * Get the call flow detail
     * @param $flow_id {Number} Flow ID
     * @return mixed
     */
    public function getFlow($flow_id);

    /**
     * List current call flows
     * @return mixed
     */
    public function listFlows();

    /**
     * Updates an existing call flow
     * @param $payload {Object} Flow information you want to update
     * @return mixed
     */
    public function updateFlow($payload);

    /**
     * Remove a call flow
     * @param $flow_id {Number} Flow ID
     * @return mixed
     */
    public function removeFlow($flow_id);

    /**
     * Marks the inbound flow_id as the default call flow
     * @param $flow_id {Number} Flow ID
     * @return mixed
     */
    public function setDefaultFlow($flow_id);

    /**
     * Remove a series of phone numbers from your account
     * @param $numbers {Number} JSON formatted array of dids
     * @return mixed
     */
    public function bulkRemoveNumbers($numbers);

    /**
     * Block inbound sms from reaching your number
     * @param $did {Number} Phone number ID
     * @param $source {Number} Source number to be blocked
     * @return mixed
     */
    public function blockInboundSMS($did, $source);

    /**
     * Remove the inbound sms block for your number
     * @param $did {Number} Phone number ID
     * @param $source {Number} Source number to be unblocked
     * @return mixed
     */
    public function removeInboundSMSBlock($did, $source);
}