<?php
require 'vendor/autoload.php';

$client = CallFire\Api\Client::createClient("****", "****");

$request = $client->findCallBroadcasts();
$response = $client->request($request);

echo $response->getBody();
