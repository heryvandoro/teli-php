<?php

namespace Teli\ChannelGroup\Contracts;

interface ChannelGroupBuilderInterface{
    /**
     * Retrieves the full list of channel groups on your account
     * @return mixed
     */
    public function listChannelGroup();

    /**
     * Get detail information of channel group on your account
     * @param $channel_group_id {Number} Channel group ID
     * @return mixed
     */
    public function get($channel_group_id);

    /**
     * Create channel group on your account
     * @param $payload {Object} Channel group information
     * @return mixed
     */
    public function create($payload);

    /**
     * Update channel group information
     * @param $channel_group_id {Number} Channel group ID
     * @param $payload {Object} Channel group information you want to change
     * @return mixed
     */
    public function update($channel_group_id, $payload);

    /**
     * Remove channel group ID on your account
     * @param $channel_group_id {Number} Channel group ID
     * @return mixed
     */
    public function remove($channel_group_id);
}