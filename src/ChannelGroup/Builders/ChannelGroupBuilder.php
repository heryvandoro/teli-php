<?php

namespace Teli\ChannelGroup\Builders;

use Teli\ChannelGroup\Contracts\ChannelGroupBuilderInterface;
use Teli\Shared\HttpClient;

class ChannelGroupBuilder implements ChannelGroupBuilderInterface{
    private $httpClient;

    public function __construct(HttpClient $httpClient){
        $this->httpClient = $httpClient;
    }

    public function listChannelGroup()
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/channelgroups/list');
    }

    public function get($channel_group_id)
    {
        return $this->httpClient->make('GET','https://apiv1.teleapi.net/channelgroups/get',[
            'channel_group_id'=> $channel_group_id
        ]);
    }

    public function create($payload)
    {
        return $this->httpClient->make('POST', 'https://apiv1.teleapi.net/channelgroups/create', $payload);
    }

    public function update($channel_group_id, $payload)
    {
        $payload['channel_group_id'] = $channel_group_id;
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/channelgroups/update', $payload);
    }

    public function remove($channel_group_id)
    {
        return $this->httpClient->make('GET', 'https://apiv1.teleapi.net/channelgroups/remove', [
            'channel_group_id'=> $channel_group_id
        ]);
    }
}