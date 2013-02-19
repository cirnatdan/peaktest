<?php
error_reporting(E_ALL | E_STRICT);
require_once 'src/autoload.php';

$kernel = new Peak\Kernel();

if(@!$argv[1] /* trying the trick from the interview */) {
    die("Please enter a location. Ex: php app.php search_query" . PHP_EOL);
}
$query = $argv[1];

$geoClient = $kernel->get("google_geocode_client");

$location = $geoClient->getFirstLocation($query);

echo $location;