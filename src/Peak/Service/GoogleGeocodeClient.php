<?php

namespace Peak\Service;

use Peak\Service\HttpClient;
use Peak\Model\GoogleGeocodeRequest;

class GoogleGeocodeClient
{
    private $httpClient;
    
    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }
    
    public function getLocation($address)
    {
        $results = json_decode($this->httpClient->query(new GoogleGeocodeRequest($address)));
        print_r($results);
    }
}