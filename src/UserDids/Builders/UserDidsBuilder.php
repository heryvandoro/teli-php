<?php

namespace Teli\UserDids\Builders;

use Teli\UserDids\Contracts\UserDidsBuilderInterface;
use Teli\Shared\HttpClient;

class UserDidsBuilder implements UserDidsBuilderInterface{
    private $httpClient;
    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function listAll($number_type=null)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/list', [
            'number_type' => $number_type
        ]);
    }

    public function listSimple($number_type=null, $limit=null, $offset=null)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/user/dids/list/simple',[
            'number_type'=> $number_type,
            'limit'=> $limit,
            'offset'=> $offset
        ]);
    }

    public function detail($number)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/get', [
            'number' => $number
        ]);
    }

    public function remove($did_id, $did_number)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/remove', [
            'did_id' => $did_id,
            'did_number' => $did_number
        ]);
    }

    public function changeCallFlow($did_id, $flow_id = null)
    {
        return $this->httpClient->make('POST', 'https://apiv1.teleapi.net/user/dids/flow', [
            'did_id' => $did_id,
            'flow_id' => isset($flow_id) ? $flow_id : "none"
        ]);
    }

    public function assignToChannelGroup($did_id, $channel_group_id = null)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/channelgroup', [
            'did_id'=> $did_id,
            'channel_group_id' => isset($channel_group_id) ? $channel_group_id : "none"
        ]);
    }

    public function assignVoicemailBox($did_id, $inbox_id, $stv=null)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/voicemail', [
            'did_id' => $did_id,
            'inbox_id' => $inbox_id || 'none',
            'stv' => $stv ? 'yes' : 'no'
        ]);
    }

    public function convertToFax($did_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/convert/fax', [
            'did_id' => $did_id
        ]);
    }

    public function convertToVoiceIfFax($did_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/convert/voice', [
            'did_id' => $did_id
        ]);
    }

    public function enableCNAM($payload)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/cnam/enable', $payload);
    }

    public function disableCNAM($payload)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/cnam/disable', $payload);
    }

    public function changeNoteOnDid($did_id, $note=null)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/note', [
            'did_id' => $did_id,
            'note' => $note
        ]);
    }

    public function removeNoteOnDid($did_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/note/remove', [
            'did_id' => $did_id
        ]);
    }

    public function showCallerIDSetLIDB($did_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/lidb/get', [
            'did_id' => $did_id
        ]);
    }

    public function setCallerIDLIDB($did_id, $value)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/lidb/set', [
            'did_id' => $did_id,
            'value' => $value
        ]);
    }

    public function setUrlSMSOnSpecificPhone($did_id, $url)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/smsurl/set', [
            'did_id' => $did_id,
            'url' => $url
        ]);
    }

    public function removeUrlSMS($did_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/smsurl/remove', [
            'did_id' => $did_id
        ]);
    }

    public function setListing($payload)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/listing/set', $payload);
    }

    public function getListing($did_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/listing/get', [
            'did_id' => $did_id
        ]);
    }

    public function removeListing($did_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/listing/remove', [
            'did_id' => $did_id
        ]);
    }

    public function setCallForwarding($payload)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/forward/set', $payload);
    }

    public function listBackorders($limit = 30, $offset = 0)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/backorders/list', [
            'limit' => $limit,
            'offset' => $offset
        ]);
    }

    public function setDeliveryURL($did_id, $dn_url)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/smsdn/set', [
            'did_id' => $did_id,
            'dn_url' => $dn_url
        ]);
    }

    public function listHiddenOffsetDids()
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/numbers/list');
    }

    public function createFlow($payload)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/flows/create', $payload);
    }

    public function getFlow($flow_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/flows/get', [
            'flow_id' => $flow_id
        ]);
    }

    public function listFlows()
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/flows/list');
    }

    public function updateFlow($payload)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/flows/update', $payload);
    }

    public function removeFlow($flow_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/flows/remove', [
            'flow_id' => $flow_id
        ]);
    }

    public function setDefaultFlow($flow_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/flows/default/set', [
            'flow_id' => $flow_id
        ]);
    }

    public function bulkRemoveNumbers($numbers)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/remove/bulk', [
            'numbers' => $numbers
        ]);
    }

    public function blockInboundSMS($did, $source)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/sms/incoming/block', [
            'did' => $did,
            'source' => $source
        ]);
    }

    public function removeInboundSMSBlock($did, $source)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/dids/sms/incoming/block/remove', [
            'did' => $did,
            'source' => $source
        ]);
    }
}