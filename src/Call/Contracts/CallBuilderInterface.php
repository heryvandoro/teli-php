<?php

namespace Teli\Call\Contracts;

interface CallBuilderInterface{
    /**
     * List calls you have recorded
     * @return mixed
     */
    public function listRecordings();

    /**
     * Get info and data for a recorded call
     * @param $recording_id {Number} Recording ID
     * @return mixed
     */
    public function getRecording($recording_id);

    /**
     * Remove recording for a call
     * @param $recording_id {Number} Recording ID
     * @return mixed
     */
    public function removeRecording($recording_id);

    /**
     * Get CDR Records for a Specific Time Period
     * @param $startDate {String} Start date of the record
     *          would be month-day-year or 04-24-2017
     * @param $endDate {String} End date of the record
     *          would be month-day-year or 04-24-2017
     * @param $filter {Object} The criteria filter
     * @return mixed
     */
    public function getRecords($startDate, $endDate, $filter=null);
}