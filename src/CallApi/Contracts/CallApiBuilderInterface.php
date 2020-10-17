<?php

namespace Teli\CallApi\Contracts;

interface CallApiBuilderInterface{

    /**
     * Set incoming Call URL
     * @param $did {Number} Phone Number
     * @param $url {String} URL to accept incoming call URL
     * @return mixed
     */
    public function setIncomingCallURL($did, $url);

    /**
     * List of call data
     * @return mixed
     */
    public function listCall();

    /**
     * Representation of a Call resource
     * @param $call_sid {Number} Call ID
     * @return mixed
     */
    public function detail($call_sid);

    /**
     * Making an outbound call
     * @param $payload {Object} Call data
     * @return mixed
     */
    public function make($payload);

    /**
     * Create call queue
     * @param $payload {Object} Call data
     * @return mixed
     */
    public function createQueue($payload);

    /**
     * List representation of all the Conference resources for this Account
     * @return mixed
     */
    public function listConference();

    /**
     * Get call reference detail
     * @param $conference_sid {Number} Conference ID
     */
    public function getConference($conference_sid);

    /**
     * List conference participant
     * @param $conference_sid {Number} Conference ID
     * @param $call_sid {Number} Call ID
     * @return mixed
     */
    public function listConferenceParticipant($conference_sid, $call_sid);

    /**
     * * Create call client
     * @param $payload {Object} Create client data
     * @return mixed
     */
    public function createClient($payload);

    /**
     * Change call client's password
     * @param $client_id {Number} Client ID
     * @param $payload {Object} Change client password data
     * @return mixed
     */
    public function changeClientPassword($client_id, $payload);

    /**
     * Delete call client
     * @param $client_id {Number} Client ID
     * @return mixed
     */
    public function deleteClient($client_id);

    /**
     * List all client
     * @return mixed
     */
    public function listClient();

    /**
     * Get list recording record
     * @return mixed
     */
    public function listRecordings();

    /**
     * Get call recording record
     * @param $call_sid {Number} Call ID
     * @return mixed
     */
    public function listCallRecordings($call_sid);

    /**
     * Delete call recording record
     * @param $recording_sid {Number} Recording ID
     * @return mixed
     */
    public function deleteRecordingRecords($recording_sid);
}