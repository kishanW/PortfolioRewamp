<?php
	$senderEmail = $_POST['senderEmail'];
	$messageBody = "Sender name: ". $_POST['senderName']. "\n\nMessage:". $_POST['message'];
	echo "<p style='display:block; padding: 5px; background: #eee; color: #555'>". $messageBody. "<br>". $senderEmail. "</p>";
	
	//Creating an sendEmail instance
	include 'sendEmail.php';
	$newEmail = new sendEmail($messageBody, "Y");
	$newEmail->setSubject("Contact Form | Atox-D Beta");
	$newEmail->setFromEmail("contactform@atox-d.com");
	$newEmail->send();
?>