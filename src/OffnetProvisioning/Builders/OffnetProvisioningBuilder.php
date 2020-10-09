<?php

namespace Teli\OffnetProvisioning\Builders;

use Teli\OffnetProvisioning\Contracts\OffnetProvisioningBuilderInterface;
use Teli\Shared\HttpClient;

class OffnetProvisioningBuilder implements OffnetProvisioningBuilderInterface{
    private $httpClient;

    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function verifyCapability($numbers)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/dids/offnet/check', [
            'numbers'=>$numbers
        ]);
    }

    public function submitNumber($numbers, $enable_sms)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/dids/offnet/submit',[
           'numbers'=> $numbers,
           'enable_sms'=> $enable_sms
        ]);
    }

    public function listOffsetNumbers()
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/dids/offnet/list');
    }

    public function statusOfSubmit($job_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/dids/offnet/status',[
            'jobid'=> $job_id
        ]);
    }

    public function listJobNumbers($job_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/dids/offnet/jobs/numbers',[
            'job_id'=> $job_id
        ]);
    }
}