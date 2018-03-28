<?php



require "vendor/autoload.php";

$access_token = '0tf06Bsiwf5sanhBLVvA22DYCZ+6NV9nTaSpipMM4XYSB45yrlku/SE+NIAXTOWsvxhngChfEgwv1NixUuvRSjxza9RO9E9NJmFAiCCjJlU+O59dpAlIY62zsxJPMPMezyPJkzMU5/Acbrfmt1jC3AdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'df2b229bf2af6911654ce4012af2278e';

$pushID = 'U316ea3147e6ef8840064f014cb83db2c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world By Sittichai.J :)');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







