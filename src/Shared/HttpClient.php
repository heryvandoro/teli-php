<?php

namespace Teli\Shared;

use Curl\Curl;

class HttpClient {
    private $curl;
    private $callApiSIDToken;

    /**
     * @return mixed
     */
    public function getCallApiSIDToken()
    {
        return $this->callApiSIDToken;
    }

    /**
     * @return mixed
     */
    public function getApiToken()
    {
        return $this->apiToken;
    }
    private $apiToken;

    public function __construct($callApiSIDToken, $apiToken) {
        $this->callApiSIDToken = $callApiSIDToken;
        $this->apiToken = $apiToken;

        $this->curl = new Curl();
    }

    public function make($method, $url, $data = [], $addtionalConfig = []) {
        $this->curl->setBasicAuthentication($this->apiToken, '');
        $data['token'] = $this->apiToken;

        if ($method === "GET") {
            $response = $this->curl->get($url, $data);
        } elseif ($method === "POST") {
            $response = $this->curl->post($url, $data);
        } elseif ($method === "DELETE") {
            $response = $this->curl->delete($url, $data);
        } elseif ($method === "PATCH") {
            $response = $this->curl->patch($url, $data);
        } elseif ($method === "PUT") {
            $response = $this->curl->put($url, $data);
        } else {
            throw new \Exception('Undefined method!');
        }

        $data = json_decode($response, true);
        return $data;
    }
}