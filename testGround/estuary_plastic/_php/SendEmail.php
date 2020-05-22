<?php
	public class SendEmail{
		var $toEmail = "";
		var $fromEmail = "";
		var $subject = "";
		var $body = "";
		var $response = "";
		var $redirectPage = "";

		function SendMail($toAddress, $fromAddress, $msgSubject, $msgBody, $redirectToPage){
			$this->toEmail = $toAddress;
			$this->fromEmail = $fromAddress;
			$this->subject = $msgSubject;
			$this->body = $msgBody;
			$this->redirectPage = $redirectToPage
		}
		function PrepareBody($body){
			$datestamp = date("F j, Y, g:1 a");
		}
		function Dispatch(){
			$mailSent = mail($this->toEmail, $this->fromAddress, $this->subject, $this->body);
			if($mailSent){
				$this->response = "Mail sent successfully";
			}
			else{
				$this->response = "Mail sending failed. Try again later.";
			}
			print "<meta http-equiv=\"refresh\" content=\"3;URL=". $redirectPage. "\">";
		}
	}
?>