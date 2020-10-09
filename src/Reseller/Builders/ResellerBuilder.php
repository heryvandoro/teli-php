<?php

namespace Teli\Reseller\Builders;

use Teli\Reseller\Contracts\ResellerBuilderInterface;
use Teli\Shared\HttpClient;

class ResellerBuilder implements ResellerBuilderInterface{
    private $httpClient;

    public function __construct(HttpClient $httpClient){
        return $this->httpClient = $httpClient;
    }

    public function create($payload)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/resellers/create',$payload);
    }

    public function get($reseller_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/resellers/get', [
            'reseller_id'=> $reseller_id
        ]);
    }

    public function listReseller()
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/reseaccountllers/list');
    }

    public function enableAccount($reseller_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/resellers/enable', [
            'reseller_id'=> $reseller_id
        ]);
    }

    public function disableAccount($reseller_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/resellers/disable', [
            'reseller_id'=> $reseller_id
        ]);
    }

    public function showRates($reseller_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/resellers/rates', [
            'reseller_id'=> $reseller_id
        ]);
    }

    public function addFunds($reseller_id, $amount)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/resellers/fund',[
            'reseller_id'=> $reseller_id,
            'amount'=> $amount
        ]);
    }

    public function updateAccount($id, $payload)
    {
        $payload['id'] = $id;
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/resellers/update', $payload);
    }

    public function reassignNumberToResellerOrCustomer($did_id, $new_user_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/user/dids/assign',[
            'did_id'=> $did_id,
            'new_user_id'=> $new_user_id
        ]);
    }

    public function updateBranding($reseller_id, $payload)
    {
        $payload['reseller_id'] = $reseller_id;
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/resellers/update_branding',$payload);
    }

    public function removeCSS($reseller_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/resellers/remove_css', [
            'reseller_id'=> $reseller_id
        ]);
    }

    public function removeLogo($reseller_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/resellers/remove_logo', [
            'reseller_id'=> $reseller_id
        ]);
    }

    public function updateRates($reseller_id, $rates)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/resellers/rates/update',[
            'reseller_id'=> $reseller_id,
            'rates'=> $rates
        ]);
    }

    public function setCreditLine($reseller_id, $credit_line)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/resellers/credit/set',[
            'reseller_id'=> $reseller_id,
            'credit_line'=> $credit_line
        ]);
    }

    public function resetPassword($reseller_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/resellers/password/reset', [
            'reseller_id' => $reseller_id
        ]);
    }

    public function getToken($reseller_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/resellers/token', [
            'reseller_id'=> $reseller_id
        ]);
    }

    public function enableOffnet($reseller_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/resellers/offnet/enable', [
            'reseller_id' => $reseller_id
        ]);
    }

    public function setChannelLimits($reseller_id, $inbound, $outbound)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/resellers/channel/limits', [
            'reseller_id' => $reseller_id,
            'inbound' => $inbound,
            'outbound' => $outbound
        ]);
    }
}