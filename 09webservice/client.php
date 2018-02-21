<?php

$client = new SoapClient('http://www.webservicex.net/geoipservice.asmx?WSDL');

$response = $client->GetGeoIP([
    'IPAddress' => '24.45.67.89',
]);

print_r($response);

echo $response->GetGeoIPResult->CountryName . "\n";

$client = new SoapClient(null, [
    'location' => 'http://localhost:4242/server.php',
    'uri' => 'demo'
    ]);
$result = $client->__soapCall('double', ['number' => 21]);

print_r($result);