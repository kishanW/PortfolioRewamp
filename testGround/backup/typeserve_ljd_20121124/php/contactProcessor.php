<?php
	$senderEmail = $_POST['email'];
	$messageBody = "Sender name: ". $_POST['contactName']. "\n\nSender Email: ". $senderEmail. "Phone". $POST_['phone']. "\n\nMessage:". $_POST['comments'];
	echo "<p style='display:block; padding: 5px; background: #eee; color: #555'>". $messageBody. "<br>". $senderEmail. "</p>";
	
	//Creating an sendEmail instance
	include 'sendEmail.php';
	$newEmail = new sendEmail($messageBody, "Y");
	$newEmail->setSubject("Email Form | TypeServe Messeger");
	$newEmail->setFromEmail("contactform@Typeserve.com");
	$newEmail->setToEmail("info@Typeserve.com");
	$newEmail->send();
?>