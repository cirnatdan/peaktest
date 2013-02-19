<?php

namespace Peak\Model;

class GoogleGeocodeRequest implements ApiRequest
{
    private $baseurl = "http://maps.googleapis.com/maps/api/geocode/json?sensor=false";
    private $address;
    
    public function __construct($address)
    {
        $this->address = $address;
    }
    
    public function getUrl() 
    {
        return $this->baseurl . "&address=" . urlencode($this->address);
    }
}
