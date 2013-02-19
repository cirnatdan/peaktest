<?php

namespace Peak\Service;

use Peak\Model\Location;

/**
 * Bind json results to PHP objects
 */
class GoogleGeocodeBinder
{

    /**
     * binds decoded json object to Peak\Model\Location
     * @param $object stdClass
     * @return $location Location
     */
    public function bindLocation(\stdClass $object)
    {
        $location = new Location();
        //set location name to first address component
        $location->name = $object->address_components[0]->long_name;

        foreach ($object->address_components as $address)
        {
            switch (current($address->types)) {
                case "locality":
                    $location->city = $address->long_name;
                    break;
                case "administrative_area_level_2":
                    $location->county = $address->long_name;
                    break;
                case "administrative_area_level_1":
                    $location->state = $address->long_name;
                    break;
                case "country":
                    $location->country = $address->long_name;
                    break;
            }
        }
        return $location;
    }
}