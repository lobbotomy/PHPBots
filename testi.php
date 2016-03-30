<?php

$botToken = "205334898:AAHCj_JhoGGNbADkaplgNj29j1naa4BYs2k";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

print_r($update);

?>