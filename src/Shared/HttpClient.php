<?php

namespace Teli\Shared;
use GuzzleHttp;

class HttpClient {
    private $guzzle;
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

        $this->guzzle =  new GuzzleHttp\Client();
    }

    public function make($method, $url, $data = [], $addtionalConfig = []) {
        $config = [
            "query" => [
                'token' => $this->apiToken
            ],
            "auth" => [$this->apiToken, '']
        ];

        $config['query'] = array_merge($config['query'], $data);
        $config['form_params'] = $data;

        $config = array_merge($config, $addtionalConfig);
        $response = $this->guzzle->request($method, $url, $config);

        $data = GuzzleHttp\json_decode($response->getBody()->getContents(), true);
        return $data;
    }
}