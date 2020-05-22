<?php
	$senderEmail = $_POST['email'];
	$messageBody = "Sender name: ". $_POST['contactName']. "\n\nSender Email: ". $senderEmail. "\n\nPhone Number:". $_POST['phone']. "\n\nMessage:". $_POST['comments'];
	echo "<p style='display:block; padding: 5px; background: #eee; color: #555'>". $messageBody. "<br>". $senderEmail. "</p>";
	
	//Creating an sendEmail instance
	include 'sendEmail.php';
	$newEmail = new sendEmail($messageBody, "Y");
	$newEmail->setSubject("Contact Form | LJD Photography");
	$newEmail->setFromEmail("contactform@LJDPhotography.com");
	$newEmail->setToEmail("anatoxind@gmail.com");
	$newEmail->send();
?>