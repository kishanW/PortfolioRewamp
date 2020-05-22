<?php

	class sendemail{
		//The required parameters to send an email
		var $from="contact-form@atox-d.com";
		var $to="admin@atox-d.com";
		var $subject="default-subject";
		var $message="TEST";
		var $successMsg = "Woot, message sent!";
		var $errorMsg = "Message sending failed";
		var $errorMsgFontColor = "eee";
		var $errorMsgBgColor = "f45";
		var $successMsgFontColor = "eee";
		var $successMsgBgColor = "00A300";
		var $msgStyleGeneral = ";padding:5px;  width: 400px; margin: 10px auto; border-radius: 5px; text-align: center";

		//This acts as the main method.
		function sendemail($inMessage, $needtowait){
			self::createBody($inMessage);
			if (strcmp($needtowait, "N")==0) {
				self::send();
			}
		}
		//Creating the email body
		function createBody($inMessage){
			$dateStamp=date("F j, Y, g:i a");
			$this->message = $inMessage. "\n\nSent on:". $dateStamp;
		}
		//set a custom subject
		function setSubject($sub){
			if (isset($sub)) {
				$this->subject=$sub;
			}
		}
		//set a custom from email
		function setFromEmail($customFrom){
			if (isset($customFrom)) {
				$this->from=$customFrom;
			}
		}
		//set a custom to email
		function setToEmail($customTo){
			if (isset($customTo)) {
				$this->to=$customTo;
			}
		}
		//set a custom  form submission success message
		function setSuccessMsg($customSuccessMsg){
			if (isset($customSuccessMsg)) {
				$this->successMsg=$customSuccessMsg;
			}
		}
		//set a custom form submission error message
		function setErrorMsg($customErrorMsg){
			if (isset($customErrorMsg)) {
				$this->errorMsg=$customErrorMsg;
			}
		}
		//Sending the email
		function send(){
			$mailSuccess=mail($this->to, $this->subject, $this->message, "From: ". $this->from);
			if ($mailSuccess) {
				unset($this->to, $this->subject, $this->message, $this->from);
				print "\n<p style='color:#". $this->successMsgFontColor. ";background:#". $this->successMsgBgColor. $this->msgStyleGeneral. "'>". $this->successMsg. "</p>\n<br>";
				print "<meta http-equiv=\"refresh\" content=\"3;URL=../contact.php\">";
			}
			else{
				print "\n<p style='color:#". $this->errorMsgFontColor. ";background:#". $this->errorMsgBgColor. $this->msgStyleGeneral. "'>". $this->errorMsg. "</p>\n<br>";
				print "<meta http-equiv=\"refresh\" content=\"3;URL=../contact.php\">";
			}
		}
	}

?>