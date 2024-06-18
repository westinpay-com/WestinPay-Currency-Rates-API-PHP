<?php
$url = 'https://westinpay.com/currency/fiat_api?api_key=YOUR-API-KEY&base=USD&output=JSON';
$response = file_get_contents($url);
$data = json_decode($response, true);
print_r($data);
?>
