<?php
#getDoaminList.php
require_once './vendor/autoload.php';

use Helge\Loader\JsonLoader;
use Helge\Client\SimpleWhoisClient;
use Helge\Service\DomainAvailability;

$whoisClient = new SimpleWhoisClient();
$dataLoader = new JsonLoader("path/to/servers.json");

$service = new DomainAvailability($whoisClient, $dataLoader);

if ($service->isAvailable("helgesverre.com")) {
    echo "Domain is available";
} else {
    echo "Domain is already taken!";
}
print_r($domainList);