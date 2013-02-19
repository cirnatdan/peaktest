<?php
error_reporting(E_ALL | E_STRICT);
require_once 'src/autoload.php';

$kernel = new Peak\Kernel();

$geoClient = $kernel->get("google_geocode_client");
$geoClient->getLocation("Ciocana");