<?php

namespace Peak\Model;

class Location
{
    public $name;

    public $country;

    /**
     * administrative_area_level_1
     */
    public $state;

    /**
     * administrative_area_level_2
     */
    public $county;

    /**
     * locality (city or town)
     */
    public $city;

    public function __toString()
    {
        return "Location: {$this->name} (Country: {$this->country}, State: {$this->state}, County: {$this->county}, City: {$this->city})" . PHP_EOL;
    }
}