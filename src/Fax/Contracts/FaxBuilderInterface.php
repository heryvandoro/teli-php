<?php

namespace Teli\Fax\Contracts;

interface FaxBuilderInterface {
    /**
     * List all the faxes for a given did_id
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #" at the URL
     * @return mixed
     */
    public function listAllFaxes($did_id);

    /**
     * Get the actual fax data about a given fax_id
     * @param $fax_id {Number} Fax ID
     * @return mixed
     */
    public function download($fax_id);

    /**
     * Sending a fax
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #" at the URL
     * @param $payload {Object} Fax information
     * @return mixed
     */
    public function send($did_id, $payload);

    /**
     * Permanently delete a fax from servers
     * @param $fax_id {Number} Fax ID
     * @return mixed
     */
    public function delete($fax_id);

    /**
     * List all the email addresses that get the inbound faxes to the associated fax number
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #" at the URL
     * @return mixed
     */
    public function listAllEmails($did_id);

    /**
     * Add an additional email address to receive inbound faxes for associated fax number
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #" at the URL
     * @param $email {String} Email address
     * @return mixed
     */
    public function addAnEmailToFax($did_id, $email);

    /**
     * Remove an email address as a recipient of inbound faxes to a fax number
     * @param $did_id {Number} Can be obtained from the "List Detail on Specific #" at the URL
     * @param $email {String} Email address
     * @return mixed
     */
    public function removeAnEmail($did_id, $email);
}