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
        $this->registerService("google_geocode_client", new Service\GoogleGeocodeClient($this->get("http_client")));
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