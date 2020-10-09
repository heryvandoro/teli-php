<?php

namespace Teli\Call\Builders;

use Teli\Call\Contracts\CallBuilderInterface;
use Teli\Shared\HttpClient;

class CallBuilder implements CallBuilderInterface{
    private $httpClient;

    public function __construct(HttpClient $httpClient){
        return $this->httpClient = $httpClient;
    }

    public function listRecordings()
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/recordings/list');
    }

    public function getRecording($recording_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/recordings/get',[
            'recording_id'=> $recording_id
        ]);
    }

    public function removeRecording($recording_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/recordings/remove',[
            'recording_id'=> $recording_id
        ]);
    }

    public function getRecords($startDate, $endDate, $filter=null)
    {
        return $this->httpClient->make('GET','https://cdr.teleapi.net/cdr/' .$startDate .$endDate, $filter);
    }
}