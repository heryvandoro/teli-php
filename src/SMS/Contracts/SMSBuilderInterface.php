<?php

namespace Teli\SMS\Contracts;

interface SMSBuilderInterface {
    /**
     * Sending SMS
     * @param $payload {Object} Send SMS information
     * @return mixed
     */
    public function send($payload);

    /**
     * Get SMS CDR Records for a Specific Time Period
     * @param $start_date {String} startDate would be month-day-year or 04-24-2017
     * @param $end_date {String} endDate would be month-day-year or 04-24-2017
     * @param array $filter {Object} Criteria you want to find
     * @return mixed
     */
    public function getRecords($start_date, $end_date, $filter = []);
}