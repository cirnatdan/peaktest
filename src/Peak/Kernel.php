<?php

namespace Peak;

/**
 * More like a container :)
 */
class Kernel
{
    private $services = array();
    
    public function __construct()
    {
        //register services
        $this->registerService("http_client", new \Peak\Service\HttpClient());
        $this->registerService("google_geocode_binder", new \Peak\Service\GoogleGeocodeBinder());
        $this->registerService("google_geocode_client", new \Peak\Service\GoogleGeocodeClient($this->get("http_client"), $this->get("google_geocode_binder")));
    }
    
    public function registerService($alias, $service)
    {
        $this->services[$alias] = $service;
    }
    
    public function get($alias)
    {
        return $this->services[$alias];
    }
}