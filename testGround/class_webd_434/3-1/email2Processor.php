<?php
$from;
$to;
$subject;
$message;

class EmailSystem{
	//This acts as the main method.
	function controller(){
		self::savevars();
		self::sendMail();
		self::finisher();
	}
	//Saving variables
	function saveVars(){
		global $from, $to, $subject, $message;
		$from = $_REQUEST['emailFrom'] ;
		$to = $_REQUEST['emailTo'] ;
		$subject = $_REQUEST['subject'] ;
		$message = $_REQUEST['message'] ;
	}
	//Sending the email
	function sendMail(){
		global $from, $to, $subject, $message;
		$replyTo=$from;
		mail($to, $subject,$message, "From: ".$from, $replyTo);
	}
	//Confirmation, destroy variables and Redirect
	function finisher(){
		global $from, $to, $subject, $message;
		echo "Thank you for using our mail form";
		unset($emailTo, $emailFrom, $subject, $message);
		print "<meta http-equiv=\"refresh\" content=\"3;URL=email2html.php\">";
	}
}
$email = new EmailSystem();
$email->controller();
?>