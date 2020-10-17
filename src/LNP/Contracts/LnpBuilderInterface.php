<?php

namespace Teli\LNP\Contracts;

interface LnpBuilderInterface{
    /**
     * Create LNP
     * @param $payload {Object} LNP information
     * @return mixed
     */
    public function createOrder($payload);

    /**
     * Get a list of all of your lnp requests
     * @return mixed
     */
    public function listOrder();

    /**
     * Get all the details about a given port request, with a list of numbers
     * @param $request_id {Number} Request ID
     * @return mixed
     */
    public function getSpecificInformation($request_id);

    /**
     * Check to see if a given number or numbers is portable to our platform
     * @param $numbers {String} String of comma separated numbers
     * @return mixed
     */
    public function checkNumberPortability($numbers);

    /**
     * Check to see if a bulk given number or numbers is portable to our platform
     * @param $numbers {String} List number that will to be checked
     * @return mixed
     */
    public function bulkCheckNumberPortability($numbers);

    /**
     * Submit signature
     * @param $request_id {Number} Request ID
     * @param $signature {String} Signature
     * @return mixed
     */
    public function submitSignature($request_id, $signature);

    /**
     * Request CSV list
     * @param $request_id {Number} Request ID
     * @return mixed
     */
    public function requestCSVList($request_id);
}