<?php

$botToken = "205334898:AAHCj_JhoGGNbADkaplgNj29j1naa4BYs2k";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);


$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

switch($message) {
	case "villager"
		sendMessage($chatId, "amromindo");
		break;
}

function sendMessage ($chatId, $message) {
	
	$url = $GLOBALS[website]."/sendMessage?chatId."&text=".urlencode($message);
	file_get_contents($url);
	
}

?>