<?php

namespace Teli\Emergency\Builders;

use Teli\Emergency\Contracts\EmergencyBuilderInterface;
use Teli\Shared\HttpClient;

class EmergencyBuilder implements EmergencyBuilderInterface{
    private $httpClient;

    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function createRecord($payload)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/911/create', $payload);
    }

    public function lookupRecord($did_id, $did_number)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/911/info',[
            'did_id'=> $did_id,
            'did_number'=> $did_number
        ]);
    }

    public function listRecord($all = false)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/911/list',[
            'all'=> $all ? "yes" : "no"
        ]);
    }

    public function updateRecord($did_id, $payload)
    {
        $payload['did_id'] = $did_id;
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/911/update', $payload);
    }

    public function removeRecord($did_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/911/remove',[
            'did_id'=> $did_id
        ]);
    }

    public function validateRecord($payload)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/911/validate', $payload);
    }

    public function createAlertGroup($group_name)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/911/groups/create',[
            'group_name'=> $group_name
        ]);
    }

    public function listAlertGroup()
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/911/groups/list');
    }

    public function lookupAlertGroup($payload)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/911/groups/get', $payload);
    }

    public function removeAlertGroup($group_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/911/groups/remove', [
            'group_id'=> $group_id
        ]);
    }

    public function assignNumberToAlertGroup($payload)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/911/groups/assign', $payload);
    }

    public function unAssignNumberToAlertGroup($payload)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/911/groups/unassign', $payload);
    }

    public function addNotificationToAlertGroup($group_id, $payload)
    {
        $payload['group_id'] = $group_id;
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/911/groups/endpoint/add', $payload);
    }

    public function removeNotifyFromAlertGroup($endpoint_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/911/groups/endpoint/remove', [
            'endpoint_id'=> $endpoint_id
        ]);
    }
}