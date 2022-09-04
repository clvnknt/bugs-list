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
  "text": "pamandanan.calvinkent@auf.edu.ph",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/issues', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();