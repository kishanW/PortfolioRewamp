<?php

	class sendemail{
		//The required parameters to send an email
		var $from="default@atox-d.com";
		var $to="waniga01@gmail.com";
		var $subject="default-subject";
		var $message="TEST";

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

		//Sending the email
		function send(){
			$mailSuccess=mail($this->to, $this->subject, $this->message, "From: ". $this->from);
			if ($mailSuccess) {
				unset($this->to, $this->subject, $this->message, $this->from);
				/*print "Mail Sent, woot!";*/
				print "<meta http-equiv=\"refresh\" content=\"3;URL=../index-4.html\">";
			}
			else{
				print "\n<p style='color:#fff;background:#f45;padding:5px;'>Message sending failed!</p>\n<br>";
				print "<meta http-equiv=\"refresh\" content=\"3;URL=../index-4.html\">";
			}
		}
	}

?>