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
     * @param $date {String} Date of record
     * @return mixed
     */
    public function listCall($date);

    /**
     * Representation of a Call resource
     * @param $date {String} Date of call
     * @param $call_sid {Number}
     * @return mixed
     */
    public function detail($date, $call_sid);

    /**
     * Making an outbound call
     * @param $date {String} Date of call
     * @param $payload {Object}
     * @return mixed
     */
    public function make($date, $payload);

    /**
     * Create call queue
     * @param $payload {Object}
     * @return mixed
     */
    public function createQueue($payload);

    /**
     * List representation of all the Conference resources for this Account
     * @param $date {String} Date of record
     */
    public function listConference($date);

    /**
     * Get call reference detail
     * @param $date {String} Date of record
     * @param $conference_sid {Number} Conference ID
     */
    public function getConference($date, $conference_sid);


    public function listConferenceParticipant($date, $conference_sid, $call_sid);

    /**
     * * Create call client
     * @param $date {String} Date of record
     * @param $payload {Object}
     * @return mixed
     */
    public function createClient($date, $payload);

    /**
     * Change call client's password
     * @param $date {String} Date of record
     * @param $client_id {Number}
     * @param $payload {Object}
     * @return mixed
     */
    public function changeClientPassword($date, $client_id, $payload);

    /**
     * Delete call client
     * @param $date {String} Date of record
     * @param $client_id {Number}
     * @return mixed
     */
    public function deleteClient($date, $client_id);

    /**
     * List all client
     * @param $date {String} Date of record
     * @return mixed
     */
    public function listClient($date);

    /**
     * Get list recording record
     * @param $date {Date} Date of record
     * @return mixed
     */
    public function listRecordings($date);

    /**
     * Get call recording record
     * @param $date {String} Date of record
     * @param $call_sid {Number} Call ID
     * @return mixed
     */
    public function listCallRecordings($date, $call_sid);

    /**
     * Delete call recording record
     * @param $date {Date} of record
     * @param $recording_sid {Number}
     * @return mixed
     */
    public function deleteRecordingRecords($date, $recording_sid);
}