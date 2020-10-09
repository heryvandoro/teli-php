<?php

namespace Teli\IP\Contracts;

interface IPBuilderInterface{
    /**
     * Creates an ip address endpoint for use in call flows
     * @param $payload {Object} IP endpoint information
     * @return mixed
     */
    public function createEndpoint($payload);

    /**
     * Get a list of all of your current ip endpoints
     * @return mixed
     */
    public function listEndpoint();

    /**
     * Remove an ip address endpoint by id
     * @param $endpoint_id {Number} Endpoint ID
     * @return mixed
     */
    public function removeEndpoint($endpoint_id);
}