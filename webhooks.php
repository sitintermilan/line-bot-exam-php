<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = '0tf06Bsiwf5sanhBLVvA22DYCZ+6NV9nTaSpipMM4XYSB45yrlku/SE+NIAXTOWsvxhngChfEgwv1NixUuvRSjxza9RO9E9NJmFAiCCjJlU+O59dpAlIY62zsxJPMPMezyPJkzMU5/Acbrfmt1jC3AdB04t89/1O/w1cDnyilFU=';
// test
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['source']['userId'];
			// Get replyToken
			$replyToken = $event['replyToken'];
 
if(strpos($event['message']['text'], "[register]" ) !== false) {  
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://sittichai.esy.es/line-bot/txt.php?id=['.$event['source']['userId'].'],['.json_encode($events).']');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$data = curl_exec($ch);
}else{
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://sittichai.esy.es/line-bot/txt.php?id='.json_encode($events));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$data = curl_exec($ch);
	
}
			
		/*
			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		*/
		}
	}
}
echo "OK";
