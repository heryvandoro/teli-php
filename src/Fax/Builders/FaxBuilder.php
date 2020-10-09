<?php

namespace Teli\Fax\Builders;

use Teli\Fax\Contracts\FaxBuilderInterface;
use Teli\Shared\HttpClient;

class FaxBuilder implements FaxBuilderInterface {
    private $httpClient;

    public function __construct(HttpClient $httpClient){
        return $this->httpClient = $httpClient;
    }
    public function listAllFaxes($did_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/fax/list', [
            'did_id' => $did_id
        ]);
    }

    public function download($fax_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/fax/get',[
            'fax_id'=> $fax_id
        ]);
    }

    public function send($did_id, $payload)
    {
        $payload['did_id']= $did_id;
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/fax/send', $payload);
    }

    public function delete($fax_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/fax/remove',[
            'fax_id'=> $fax_id
        ]);
    }

    public function listAllEmails($did_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/fax/emails/list',[
            'did_id'=> $did_id
        ]);
    }

    public function addAnEmailToFax($did_id, $email)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/fax/emails/add', [
            'email' => $email,
            'did_id' => $did_id
        ]);
    }

    public function removeAnEmail($did_id, $email)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/fax/emails/remov',[
            'did_id'=> $did_id,
            'email'=> $email
        ]);
    }
}