<?php

namespace Teli;

use Teli\Call\Builders\CallBuilder;
use Teli\CallApi\Builders\CallApiBuilder;
use Teli\ChannelGroup\Builders\ChannelGroupBuilder;
use Teli\Customer\Builders\CustomerBuilder;
use Teli\Dids\Builders\DidsBuilder;
use Teli\UserDids\Builders\UserDidsBuilder;
use Teli\Emergency\Builders\EmergencyBuilder;
use Teli\Fax\Builders\FaxBuilder;
use Teli\IP\Builders\IPBuilder;
use Teli\LNP\Builders\LnpBuilder;
use Teli\LookUp\Builders\LookUpBuilder;
use Teli\MMS\Builders\MMSBuilder;
use Teli\OffnetProvisioning\Builders\OffnetProvisioningBuilder;
use Teli\Reseller\Builders\ResellerBuilder;
use Teli\RestrictedUser\Builders\RestrictedUserBuilder;
use Teli\Shared\HttpClient;
use Teli\SIP\Builders\SIPBuilder;
use Teli\SMS\Builders\SMSBuilder;
use Teli\User\Builders\UserBuilder;
use Teli\Voicemail\Builders\VoicemailBuilder;

class Teli {
    private $httpClient;
    public $call;
    public $callApi;
    public $channelGroup;
    public $customer;
    public $dids;
    public $emergency;
    public $fax;
    public $ip;
    public $lnp;
    public $lookup;
    public $mms;
    public $offnetProvisioning;
    public $reseller;
    public $restrictedUser;
    public $sip;
    public $sms;
    public $user;
    public $userDids;
    public $voicemail;

    public function __construct($callApiSIDToken, $apiToken) {
        $this->httpClient = new HttpClient($callApiSIDToken, $apiToken);

        $this->call = new CallBuilder($this->httpClient);
        $this->callApi = new CallApiBuilder($this->httpClient);
        $this->channelGroup = new ChannelGroupBuilder($this->httpClient);
        $this->customer = new CustomerBuilder($this->httpClient);
        $this->dids= new DidsBuilder($this->httpClient);
        $this->emergency = new EmergencyBuilder($this->httpClient);
        $this->fax = new FaxBuilder($this->httpClient);
        $this->ip = new IPBuilder($this->httpClient);
        $this->lnp = new LnpBuilder($this->httpClient);
        $this->lookup = new LookUpBuilder($this->httpClient);
        $this->mms = new MMSBuilder($this->httpClient);
        $this->offnetProvisioning = new OffnetProvisioningBuilder($this->httpClient);
        $this->reseller = new ResellerBuilder($this->httpClient);
        $this->restrictedUser = new RestrictedUserBuilder($this->httpClient);
        $this->sip = new SIPBuilder($this->httpClient);
        $this->sms = new SMSBuilder($this->httpClient);
        $this->user = new UserBuilder($this->httpClient);
        $this->userDids= new UserDidsBuilder($this->httpClient);
        $this->voicemail = new VoicemailBuilder($this->httpClient);
    }
}