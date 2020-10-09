<?php

namespace Teli\Voicemail\Builders;

use Teli\Voicemail\Contracts\VoicemailBuilderInterface;
use Teli\Shared\HttpClient;

class VoicemailBuilder implements VoicemailBuilderInterface{
    private $httpClient;

    public function __construct(HttpClient $httpClient){
        return $this->httpClient = $httpClient;
    }

    public function createAccount($payload)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/voicemail/inbox/create', $payload);
    }

    public function getAccount($inbox_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/voicemail/inbox/get',[
            'inbox_id'=> $inbox_id
        ]);
    }

    public function listAccount()
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/voicemail/inbox/list');
    }

    public function updateAccount($inbox_id, $payload)
    {
        $payload['inbox_id'] = $inbox_id;
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/voicemail/inbox/update', $payload);
    }

    public function removeAccount($inbox_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/voicemail/inbox/remove',[
            'inbox_id'=> $inbox_id
        ]);
    }

    public function addInboxEmail($inbox_id, $email_address)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/voicemail/inbox/email/add',[
            'inbox_id'=> $inbox_id,
            'email_address'=> $email_address
        ]);
    }

    public function removeInboxEmail($inbox_id, $email_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/voicemail/inbox/email/remove',[
            'inbox_id'=> $inbox_id,
            'email_id'=> $email_id
        ]);
    }

    public function listVoicemail($inbox_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/voicemail/inbox/vms/list',[
            'inbox_id'=> $inbox_id
        ]);
    }

    public function getVoicemail($inbox_id, $message_id, $raw)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/voicemail/inbox/vms/get',[
            'inbox_id'=> $inbox_id,
            'message_id'=> $message_id,
            'raw'=> $raw
        ]);
    }

    public function removeVoicemail($inbox_id, $message_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/voicemail/inbox/vms/remove',[
            'inbox_id'=> $inbox_id,
            'message_id'=> $message_id
        ]);
    }
}