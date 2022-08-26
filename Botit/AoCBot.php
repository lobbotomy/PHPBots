 <?php

$botToken = "205334898:AAHCj_JhoGGNbADkaplgNj29j1naa4BYs2k";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);


$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

switch($message) {
	
	case "/1":
		sendVoice($chatId, "AwADBAADHQEAAmequFLDhwlWL1mQpAI");
		break;
	
	case "/2":
		sendVoice($chatId, "AwADBAADHgEAAmequFJNtwr5JfHkhQI");
		break;
		
	case "/3":
		sendVoice($chatId, "AwADBAADIgEAAmequFIp57fLFZ7y2wI");
		break;
		
	case "/4":
		sendVoice($chatId, "AwADBAADIAEAAmequFK-gKlRb4VI0gI");
		break;
		
	case "/5":
		sendVoice($chatId, "AwADBAADJAEAAmequFJ1xHHLH9iubgI");
		break;
		
	case "/6":
		sendVoice($chatId, "AwADBAADIwEAAmequFLkiBX6VmMeXgI");
		break;
		
	case "/7":
		sendVoice($chatId, "AwADBAADJQEAAmequFKwxzdO3P6yyAI");
		break;
		
	case "/8":
		sendVoice($chatId, "AwADBAADJgEAAmequFIEqNllAAF-4AkC");
		break;
		
	case "/9":
		sendVoice($chatId, "AwADBAADJwEAAmequFK9hanFUW1pTwI");
		break;
		
	case "/10":
		sendVoice($chatId, "AwADBAADKAEAAmequFLB0o0In1hNagI");
		break;
		
	case "/11":
		sendVoice($chatId, "AwADBAADKQEAAmequFKnibhqhj4Q4Q");
		break;
		
	case "/12":
		sendVoice($chatId, "AwADBAADKgEAAmequFLnP9ckKSo2uAI");
		break;
		
	case "/13":
		sendVoice($chatId, "AwADBAADKwEAAmequFLGBKjHYJxzYwI");
		break;
		
	case "/14":
		sendVoice($chatId, "AwADBAADLAEAAmequFK8i1qREf2LwQI");
		break;
		
	case "/15":
		sendVoice($chatId, "AwADBAADLQEAAmequFLZtaPkNRMdpAI");
		break;
		
	case "/16":
		sendVoice($chatId, "AwADBAADLgEAAmequFKi06UzNbRCcwI");
		break;
		
	case "/17":
		sendVoice($chatId, "AwADBAADLwEAAmequFI5lCEg9o__jgI");
		break;
		
	case "/18":
		sendVoice($chatId, "AwADBAADMAEAAmequFJRX-rDptFiygI");
		break;
		
	case "/19":
		sendVoice($chatId, "AwADBAADMQEAAmequFLWrm03Bo84YAI");
		break;
		
	case "/20":
		sendVoice($chatId, "AwADBAADMgEAAmequFIeNHgxDKkCCgI");
		break;
		
	case "/21":
		sendVoice($chatId, "AwADBAADMwEAAmequFLd5DgXMVHVEQI");
		break;
		
	case "/22":
		sendVoice($chatId, "AwADBAADNAEAAmequFLqgwJe0GmctQI");
		break;
		
	case "/23":
		sendVoice($chatId, "AwADBAADNQEAAmequFI0zT41Ae0sfQI");
		break;
		
	case "/24":
		sendVoice($chatId, "AwADBAADNgEAAmequFI51nN8Ea09TQI");
		break;
		
	case "/25":
		sendVoice($chatId, "AwADBAADNwEAAmequFIgygqR4x6wQAI");
		break;
		
	case "/26":
		sendVoice($chatId, "AwADBAADOAEAAmequFIiqD1wej6mxgI");
		break;
		
	case "/27":
		sendVoice($chatId, "AwADBAADOQEAAmequFL1HjzRLOKo7wI");
		break;
		
	case "/28":
		sendVoice($chatId, "AwADBAADOgEAAmequFLwAzsmf5gu9gI");
		break;
		
	case "/29":
		sendVoice($chatId, "AwADBAADOwEAAmequFLbAy8ayQlXkAI");
		break;
		
	case "/30":
		sendVoice($chatId, "AwADBAADPAEAAmequFJUDyQ14Vq0MQI");
		break;
		
	case "/31":
		sendVoice($chatId, "AwADBAADPQEAAmequFLPnmZJd3UN-");
		break;
	
	case "/32":
		sendVoice($chatId, "AwADBAADPgEAAmequFLVxmt9Ogm7kgI");
		break;
		
	case "/33":
		sendVoice($chatId, "AwADBAADPwEAAmequFK5rNkIhPV34QI");
		break;
		
	case "/34":
		sendVoice($chatId, "AwADBAADQAEAAmequFInOE7Psg4dOQI");
		break;
		
	case "/35":
		sendVoice($chatId, "AwADBAADQQEAAmequFJJPKm7SUgyzAI");
		break;
		
	case "/36":
		sendVoice($chatId, "AwADBAADQgEAAmequFJNhZjs0Glb2gI");
		break;
		
	case "/37":
		sendVoice($chatId, "AwADBAADQwEAAmequFLUGcIdvRPpUAI");
		break;
		
	case "/38":
		sendVoice($chatId, "AwADBAADRAEAAmequFLqXj7Uge0Z2wI");
		break;
		
	case "/39":
		sendVoice($chatId, "AwADBAADRQEAAmequFI6YqjUzr5OjwI");
		break;
		
	case "/40":
		sendVoice($chatId, "AwADBAADRgEAAmequFJ0fDZv8hfUFQI");
		break;
		
	case "/41":
		sendVoice($chatId, "AwADBAADRwEAAmequFJNjLc8ao34ewI");
		break;
		
	case "/42":
		sendVoice($chatId, "AwADBAADSAEAAmequFIuG1ghrcDV-AI");
		break;
		
	default:
		break;
}

function sendVoice ($chatId, $message) {
	
	$url = $GLOBALS[website]."/sendvoice?chat_id=".$chatId."&voice=".urlencode($message);
	file_get_contents($url);
	
}

?>
?>
