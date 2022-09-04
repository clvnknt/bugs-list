<?php
include "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

$client = new Client();
$headers = [
  'Authorization' => 'UCq2QweqgA5gwW2yqjelegxx5kkDcfSW',
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "clvnknt",
  "password": "AUF14",
  "real_name": "Calvin Kent R. Pamandanan",
  "email": "pamandanan.calvinkent@auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/issues', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();