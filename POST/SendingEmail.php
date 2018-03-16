<?php

//mail('aush.acharya@gmail.com','Testing','this is just a test to check localhost email','From: aush.acharya@gmail.com');

$emailTo = "aush.acharya@gmail.com";
$subject = "Testing";
$body = "lets check its working or not";
$headers = "From: aush.acharya@gmail.com";
	if (mail($emailTo, $subject , $body , $headers)) {
		echo "Mail sent successfully";

	} else {
		echo "Mail not sent.";
	}


?>