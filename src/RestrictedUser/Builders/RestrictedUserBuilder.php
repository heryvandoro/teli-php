<?php

namespace Teli\RestrictedUser\Builders;

use Teli\RestrictedUser\Contracts\RestrictedUserBuilderInterface;
use Teli\Shared\HttpClient;

class RestrictedUserBuilder implements RestrictedUserBuilderInterface{
    private $httpClient;

    public function __construct(HttpClient $httpClient){
        return $this->httpClient = $httpClient;
    }

    public function createUser($payload)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/create', $payload);
    }

    public function getUser($ruser_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/get',[
            'ruser_id'=> $ruser_id
        ]);
    }

    public function listUser()
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/list');
    }

    public function updateUser($ruser_id, $payload)
    {
        $payload['ruser_id'] = $ruser_id;
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/update', $payload);
    }

    public function enableUser($ruser_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/enable',[
            'ruser_id'=> $ruser_id
        ]);
    }

    public function disableUser($ruser_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/disable',[
            'ruser_id'=> $ruser_id
        ]);
    }

    public function listUserRates($ruser_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/rates/get',[
            'ruser_id'=> $ruser_id
        ]);
    }

    public function fundUser($ruser_id, $amount)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/fund',[
            'ruser_id'=> $ruser_id,
            'amount'=> $amount
        ]);
    }

    public function listPermissionGroups()
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/groups/available');
    }

    public function listPermissionUser($ruser_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/groups/list',[
            'ruser_id'=> $ruser_id
        ]);
    }

    public function setSecurityGroup($ruser_id, $group_id, $enabled)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/groups/set',[
            'ruser_id'=> $ruser_id,
            'group_id'=> $group_id,
            'enabled'=> $enabled
        ]);
    }

    public function updateUserRates($ruser_id, $rates)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/rates/update',[
            'ruser_id'=> $ruser_id,
            'rates'=> $rates
        ]);
    }

    public function setCreditLine($ruser_id, $credit_line)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/credit/set',[
            'ruser_id'=> $ruser_id,
            'credit_line'=> $credit_line
        ]);
    }

    public function resetPassword($ruser_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/password/reset',[
            'ruser_id'=> $ruser_id
        ]);
    }

    public function updateBranding($ruser_id, $payload)
    {
        $payload['ruser_id'] = $ruser_id;
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/update_branding', $payload);
    }

    public function removeCSS($ruser_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/remove_css',[
            'ruser_id'=> $ruser_id
        ]);
    }

    public function removeLogo($ruser_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/remove_logo',[
            'ruser_id'=> $ruser_id
        ]);
    }

    public function getToken($ruser_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/token',[
           'ruser_id'=> $ruser_id
        ]);
    }

    public function enableOffnet($ruser_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/offnet/enable',[
            'ruser_id'=> $ruser_id
        ]);
    }

    public function setPostpay($ruser_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/postpay/enable',[
            'ruser_id'=> $ruser_id
        ]);
    }

    public function setChannelLimits($ruser_id, $inbound = null, $outbound = null)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/rusers/channel/limits',[
            'ruser_id'=> $ruser_id,
            'inbound'=> $inbound,
            'outbound'=> $outbound
        ]);
    }
}