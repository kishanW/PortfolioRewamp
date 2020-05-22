<?php
	$senderEmail = $_POST['senderEmail'];
	$messageBody = "Sender name: ". $_POST['senderName']. "\n\n". $senderEmail. "\n\nMessage:". $_POST['message'];
	//echo "<p style='display:block; padding: 5px; background: #eee; color: #555'>". $messageBody. "<br>". $senderEmail. "</p>";
	
	//Creating an sendEmail instance
	include 'sendEmail.php';

	/**
	*	sendEmail() takes two parameters/ arguments.
	*	$messageBody: The body of the message
	*	
	*	Then the second argument is to enable customizations or not.
	*	If you want to ENABLE customizations sencond argument should be "Y".
	*	If you want to DISABLE customizations sencond argument should be "N".
	*/
	$newEmail = new sendEmail($messageBody, "Y");
	
	/**
	*	setSubject() takes one parameter/ argument.
	*	A string should be sent, this will be used as the custom email title/ subject.
	*/
	$newEmail->setSubject("Contact Form | Atox-D");
	
	/**
	*	setFromEmail() takes one parameter/ argument.
	*	A string should be sent, this will be used as the custom from address.
	*/
	$newEmail->setFromEmail("contactForm@atox-d.com");

	/**
	*	setToEmail() takes one parameter/ argument.
	*	A string should be sent, this will be used as the custom destination/ recipient address.
	*/
	$newEmail->setToEmail("admin@atox-d.com");

	/**
	*	setSuccessMsg() takes one parameter/ argument.
	*	A string should be sent, this will be used as the custom form submission success message.
	*/ 
	$newEmail->setSuccessMsg("Message Sent");
	
	/**
	*	setErrorMsg() takes one parameter/ argument.
	*	A string should be sent, this will be used as the custom form submission error message.
	*/ 
	$newEmail->setErrorMsg("Message sending failed. Please try again later.");
	
	/**
	*	send() takes NO parameter/ argument.
	*	This method will initiate sending the email.
	*/ 
	$newEmail->send();
?>