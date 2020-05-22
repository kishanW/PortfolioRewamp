<?php
	$RedirectTo = "../sell.htm";
	$SendToEmail = "misc@atox-d.com";
	$MessageSubject = "Estuary Polymer Email System Test | ". date("Y-m-d");
	$FromEmail = $_POST['sell_form_email'];
	$MessageBody = "Sender: ". $FromEmail. "\n\nMessage:\n\n". $_POST['sell_form_message'];

	include 'SendEmail.php';
	$email = new SendEmail($SendToEmail, $FromEmail, $MessageSubject, $MessageBody, $RedirectTo);
	$email->Dispatch();
?>