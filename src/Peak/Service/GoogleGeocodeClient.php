<?php

namespace Peak\Service;

use Peak\Service\HttpClient;
use Peak\Model\GoogleGeocodeRequest;

class GoogleGeocodeClient
{
    private $httpClient;
    private $binder;
    
    public function __construct(HttpClient $httpClient, GoogleGeocodeBinder $binder)
    {
        $this->httpClient = $httpClient;
        $this->binder = $binder;
    }
    
    public function getFirstLocation($address)
    {
        $result = $this->query($address);
        return $this->binder->bindLocation($result[0]);
    }

    public function query($address)
    {
        return json_decode($this->httpClient->query(new GoogleGeocodeRequest($address)))->results;
    }
}