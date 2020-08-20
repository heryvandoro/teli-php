<?php

namespace Teli\Shared;
use GuzzleHttp;

class HttpClient {
    private $guzzle;
    private $callApiSIDToken;
    private $apiToken;

    public function __construct($callApiSIDToken, $apiToken) {
        $this->callApiSIDToken = $callApiSIDToken;
        $this->apiToken = $apiToken;

        $this->guzzle =  new GuzzleHttp\Client([
            'base_uri' => 'https://api.teleapi.net',
        ]);
    }

    public function make($method, $url, $data = [], $addtionalConfig = []) {
        $config = [];

        if ($method === 'GET') {
            $data['token'] = $this->apiToken;
            $config['query'] = $data;
        } else {
            $config['query'] = [
                'token' => $this->apiToken
            ];
            $config['json'] = $data;
        }

        $config = array_merge($config, $addtionalConfig);
        $response = $this->guzzle->request($method, $url, $config);

        $data = GuzzleHttp\json_decode($response->getBody()->getContents(), true);
        if ($response->getStatusCode() !== 200 || $data['code'] !== 200) {
            throw new \Exception($data['data']);
        }
        return $data['data'];
    }
}