<?php

namespace Teli\CallApi\Builders;

use Teli\CallApi\Contracts\CallApiBuilderInterface;
use Teli\Shared\HttpClient;

Class CallApiBuilder implements CallApiBuilderInterface{
    private $httpClient;

    public function __construct(HttpClient $httpClient){
        return $this->httpClient = $httpClient;
    }

    public function setIncomingCallURL($did, $url)
    {
        return $this->httpClient->make('POST','https://api.teleapi.net/user/dids/callapi',[
            'did'=> $did,
            'url'=> $url
        ]);
    }

    public function listCall($date)
    {
        return $this->httpClient->make('GET','https://api.teleapi.net/call/' .$date .'/Accounts/' .$this->httpClient->getCallApiSIDToken() .'/Calls.json');
    }

    public function detail($date, $call_sid)
    {
        return $this->httpClient->make('GET','https://api.teleapi.net/call/' .$date .'/Accounts/' .$this->httpClient->getCallApiSIDToken() .'/Calls.json/' .$call_sid );
    }

    public function make($date, $payload)
    {
        return $this->httpClient->make('POST','https://api.teleapi.net/call/' .$date .'/Accounts/' .$this->httpClient->getCallApiSIDToken() .'/Calls.json', $payload);
    }

    public function createQueue($payload)
    {
        return $this->httpClient->make('POST','https://api.teleapi.net/callqueue/provisioning', $payload);
    }

    public function listConference($date)
    {
        return $this->httpClient->make('GET', 'https://api.teleapi.net/call/'.$date.'/Accounts/'.$this->httpClient->getCallApiSIDToken().'/Conferences.json');
    }

    public function getConference($date, $conference_sid)
    {
        return $this->httpClient->make('GET', 'https://api.teleapi.net/call/'.$date.'/Accounts/'.$this->httpClient->getCallApiSIDToken().'/Conferences/'.$conference_sid.'.json');
    }

    public function listConferenceParticipant($date, $conference_sid, $call_sid)
    {
        return $this->httpClient->make('GET','https://api.teleapi.net/call/'.$date.'/Accounts/'.$this->httpClient->getCallApiSIDToken().'/Conferences/'.$conference_sid.'/Participants/'.$call_sid.'.json');
    }

    public function createClient($date, $payload)
    {
        return $this->httpClient->make('POST','https://api.teleapi.net/call/' .$date .'/Accounts/' .$this->httpClient->getCallApiSIDToken() .'/Clients.json', $payload);
    }

    public function changeClientPassword($date, $client_id, $payload)
    {
        return $this->httpClient->make('PUT','https://api.teleapi.net/call/' .$date .'/Accounts/' .$this->httpClient->getCallApiSIDToken() .'/Clients.json/' .$client_id, $payload);
    }

    public function deleteClient($date, $client_id)
    {
        return $this->httpClient->make('DELETE', 'https://api.teleapi.net/call/' .$date .'/Accounts/' .$this->httpClient->getCallApiSIDToken() .'/Clients/' .$client_id);
    }

    public function listClient($date)
    {
        return $this->httpClient->make('GET', 'https://api.teleapi.net/call/' .$date .'/Accounts/' .$this->httpClient->getCallApiSIDToken() .'/Clients.json');
    }

    public function listCallRecordings($date, $call_sid)
    {
        return $this->httpClient->make('GET','https://api.teleapi.net/call/' .$date .'/Accounts/' .$this->httpClient->getCallApiSIDToken() .'/calls/'.$call_sid.'/Recordings.json');
    }

    public function listRecordings($date)
    {
        return $this->httpClient->make('GET','https://api.teleapi.net/call/' .$date .'/Accounts/' .$this->httpClient->getCallApiSIDToken() .'/Recordings.json');
    }

    public function deleteRecordingRecords($date, $recording_sid)
    {
        return $this->httpClient->make('DELETE','https://api.teleapi.net/call/' .$date .'/Accounts/' .$this->httpClient->getCallApiSIDToken() .'/Recordings.json/' .$recording_sid);
    }
}