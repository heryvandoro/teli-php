<?php

namespace Teli\User\Builders;

use Teli\User\Contracts\UserBuilderInterface;
use Teli\Shared\HttpClient;

class UserBuilder implements UserBuilderInterface{
    private $httpClient;

    public function __construct(HttpClient $httpClient){
        $this->httpClient = $httpClient;
    }

    public function getBillingDetailSummary($payload){
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/detail', $payload);
    }

    public function updateAccountInfo($payload){
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/update', $payload);
    }

    public function updatePassword($payload){
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/password/update', $payload);
    }

    public function updateBranding($payload){
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/branding/update', $payload);
    }

    public function createSubUser($payload){
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/subusers/create', $payload);
    }

    public function listSubUser(){
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/subusers/list');
    }

    public function updateSubUser($subuser_id, $payload){
        $payload['subuser_id']= $subuser_id;
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/subusers/update', $payload);
    }

    public function removeSubUser($subuser_id){
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/subusers/remove', $subuser_id);
    }

    public function updateFraudSettings($payload){
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/fraud/update', $payload);
    }

    public function removeCSS(){
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/user/css/remove');
    }

    public function removeLogo(){
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/logo/remove');
    }

    public function setSMSURL($url){
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/user/api/smsurl', $url);
    }

    public function setWebHookUrl($url){
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/hook/set', $url);
    }

    public function setSMSDeliveryUrl($url){
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/user/sms/delivery/set', $url);
    }

    public function setAffiliatePaypal($address){
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/user/affiliate/paypal', $address);
    }

    public function resetSubUserPassword($subuser_id, $new_password){
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/subusers/password/reset',[
            'subuser_id'=> $subuser_id,
            'new_password'=> $new_password
        ]);
    }

    public function listSubUserSecurityGroups($subuser_id){
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/subusers/groups/list', $subuser_id);
    }

    public function outboundChannelCount(){
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/users/channels/outbound');
    }

    public function getInvoice($payload){
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/billing/invoice/get', $payload);
    }

    public function getInvoiceByEmail($payload){
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/billing/invoice/email', $payload);
    }

    public function getBalance(){
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/billing/balance');
    }

    public function getDetailedBalance(){
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/billing/balance/detailed');
    }

    public function listTransactions($payload){
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/transactions/list', $payload);
    }

    public function getTransactionItems($transaction_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/transaction/items',[
            'transaction_id'=> $transaction_id
        ]);
    }
}


