<?php

namespace Teli\Dids\Builders;

use Teli\Dids\Contracts\DidsBuilderInterface;
use Teli\Shared\HttpClient;

class DidsBuilder implements DidsBuilderInterface{
    private $httpClient;
    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function states()
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/dids/states');
    }

    public function rateCenters($state)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/dids/ratecenters', [
            'state' => $state
        ]);
    }

    public function localNumbers($payload)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/dids/list', $payload);
    }

    public function tollFreeNumbers()
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/dids/list', [
            'type' => 'tollfree'
        ]);
    }

    public function orderSingleNumber($payload)
    {
        return $this->httpClient->make('POST', 'https://apiv1.teleapi.net/dids/order', $payload);
    }

    public function searchVanityTollfreeNumbers($search)
    {
        return $this->httpClient->make('POST', 'https://apiv1.teleapi.net/dids/tollfree/vanity', [
            'search' => $search
        ]);
    }

    public function orderVanityTollfreeNumber($did_number, $vanity_tf = false)
    {
        return $this->httpClient->make('POST', 'https://apiv1.teleapi.net/dids/cart', [
            'did_number' => $did_number,
            'vanity_tf' => $vanity_tf ? 'yes' : 'no'
        ]);
    }

    public function getNPA($available = '', $type = '')
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/dids/npas',[
            'available'=> $available,
            'type'=> $type
        ]);
    }

    public function getNXX($npa, $available = '', $type = '')
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/dids/nxxs',[
            'npa'=> $npa,
            'available'=> $available,
            'type'=> $type
        ]);
    }

    public function getIntlRatesCSV()
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/dids/intl/rates.csv');
    }

    public function getIntlCountriesList()
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/dids/intl/countries/list');
    }

    public function getIntlStatesList($country_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/dids/intl/states/list',[
            'country_id'=> $country_id
        ]);
    }
}
