<?php

namespace Teli\OffnetProvisioning\Contracts;

interface OffnetProvisioningBuilderInterface{
    /**
     * Check if we are able to provision an offnet number on our network.
     * @param $numbers {String} Stringified JSON array
     * @return mixed
     */
    public function verifyCapability($numbers);

    /**
     * Submit an offnet insert job
     * @param $numbers {String} Stringified JSON array
     * @param $enable_sms {Boolean} Enabling sms
     * @return mixed
     */
    public function submitNumber($numbers, $enable_sms);

    /**
     * List all of the offnet jobs you have submitted
     * @return mixed
     */
    public function listOffsetNumbers();

    /**
     * Detailed look at a specific job
     * @param $job_id {Number} Offnet job ID
     * @return mixed
     */
    public function statusOfSubmit($job_id);

    /**
     * Retrieves a list of numbers for a given offnet job
     * @param $job_id {Number} Offnet job ID
     * @return mixed
     */
    public function listJobNumbers($job_id);
}