<?php

namespace Teli\Customer\Builders;

use Teli\Customer\Contracts\CustomerBuilderInterface;
use Teli\Shared\HttpClient;

class CustomerBuilder implements CustomerBuilderInterface{
    private $httpClient;

    public function __construct(HttpClient $httpClient){
        return $this->httpClient = $httpClient;
    }

    public function create($payload)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/create', $payload);
    }

    public function get($customer_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/get', [
            'customer_id' => $customer_id
        ]);
    }

    public function listCustomer()
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/list');
    }

    public function enableAccount($customer_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/enable', [
            'customer_id' => $customer_id
        ]);
    }

    public function disableAccount($customer_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/disable', [
            'customer_id'=> $customer_id
        ]);
    }

    public function showRates($customer_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/rates',[
            'customer_id'=> $customer_id
        ]);
    }

    public function addFunds($customer_id, $amount)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/fund',[
            'customer_id'=> $customer_id,
            'amount'=> $amount
        ]);
    }

    public function updateAccount($customer_id, $payload)
    {
        $payload['customer_id'] = $customer_id;
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/update', $payload);
    }

    public function updateBranding($customer_id, $payload)
    {
        $payload['customer_id']= $customer_id;
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/update_branding', $payload);
    }

    public function removeCSS($customer_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/remove_css', [
            'customer_id'=> $customer_id
        ]);
    }

    public function removeLogo($customer_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/remove_logo',[
            'customer_id'=> $customer_id
        ]);
    }

    public function updateRates($customer_id, $rates)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/rates/update',[
            'customer_id' => $customer_id,
            'rates' => $rates
        ]);
    }

    public function setCreditLine($customer_id, $credit_line)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/credit/set',[
            'customer_id'=> $customer_id,
            'credit_line'=> $credit_line
        ]);
    }

    public function resetPassword($customer_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/password/reset',[
            'customer_id'=> $customer_id
        ]);
    }

    public function setChannelLimits($customer_id, $payload)
    {
        $payload['customer_id'] = $customer_id;
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/customers/channel/limits', $payload);
    }
}