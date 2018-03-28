<?php
$access_token = '0tf06Bsiwf5sanhBLVvA22DYCZ+6NV9nTaSpipMM4XYSB45yrlku/SE+NIAXTOWsvxhngChfEgwv1NixUuvRSjxza9RO9E9NJmFAiCCjJlU+O59dpAlIY62zsxJPMPMezyPJkzMU5/Acbrfmt1jC3AdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
