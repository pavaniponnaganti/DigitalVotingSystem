<?php
require("class-Clockwork.php");

$apikey="ef3e7af67d4d3b5b7b4ef232c3b89781513e551c";

$clockwork = new Clockwork($apikey);

$message = array('to' => "9010614765" , 'message' => "Hi sunndar this is from dvs");

$done = $clockwork->send($message);
?>
