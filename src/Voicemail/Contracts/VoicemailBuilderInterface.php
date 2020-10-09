<?php

namespace Teli\Voicemail\Contracts;

interface VoicemailBuilderInterface{
    /**
     * Create a voicemail account / inbox you can assign to DIDs
     * @param $payload {Object} Voicemail data
     * @return mixed
     */
    public function createAccount($payload);

    /**
     * Lists all voicemails currently available for the given inbox_id
     * @param $inbox_id {Number} Inbox ID
     * @return mixed
     */
    public function getAccount($inbox_id);

    /**
     * Lists all voicemails
     * @return mixed
     */
    public function listAccount();

    /**
     * Update voicemail data for a given inbox_id
     * @param $inbox_id {Number} Inbox ID
     * @param $payload {Object} Voicemail data you want to change
     * @return mixed
     */
    public function updateAccount($inbox_id, $payload);

    /**
     * Remove voicemail account data by inbox_id
     * @param $inbox_id {Number} Inbox ID
     * @return mixed
     */
    public function removeAccount($inbox_id);

    /**
     * Sets an email address to a given inbox_id
     * @param $inbox_id {Number} Inbox ID
     * @param $email_address {String} Email address
     * @return mixed
     */
    public function addInboxEmail($inbox_id, $email_address);

    /**
     * Removes the associated email address from the voicemail inbox
     * @param $inbox_id {Number} Inbox ID
     * @param $email_id {Number} Email address ID
     * @return mixed
     */
    public function removeInboxEmail($inbox_id, $email_id);

    /**
     * List current voicemail messages for a given inbox_id
     * @param $inbox_id {Number} Inbox ID
     * @return mixed
     */
    public function listVoicemail($inbox_id);

    /**
     * Attempts to retrieve a given message from a given inbox
     * @param $inbox_id {Number} Inbox ID
     * @param $message_id {Number} Message ID
     * @param $raw {Boolean} Flag to determine the result type
     * @return mixed
     */
    public function getVoicemail($inbox_id, $message_id, $raw);

    /**
     * Removes a given message from a desired inbox
     * @param $inbox_id {Number} Inbox ID
     * @param $message_id {Number} Message ID
     * @return mixed
     */
    public function removeVoicemail($inbox_id, $message_id);
}