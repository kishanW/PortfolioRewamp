<?php
echo "TESt";
$emailFrom="contactForm@atox-d.com";
$emailTo="anatoxind@gmail.com";
$message;
$sendStatus;
class EmailSystem{
	//This acts as the main method.
	function controller(){	
		echo "here";
		self::savevars();
		self::sendMail();
		self::finisher();
	}
	//Saving variables
	function saveVars(){
		global $message;
		//Message body
		$message = "From: ". $_REQUEST['name']. "\n". "Sender Email: ". $_REQUEST['email']. "\n". $_REQUEST['message'];
		echo $message;
	}
	//Sending the email
	function sendMail(){
		global $emailFrom, $emailTo,$message,$sendStatus;
		$sendStatus=mail($emailTo, "$email",$message, "From:" . $emailFrom);
	}
	//Confirmation, destroy variables and Redirect
	function finisher(){
		global $sendStatus;						
		//response array with status code and message  
		$response_array = array();  
		if($sendStatus)
		{
			/*
				Return Success 
				echo json_encode($response_array);  
			*/
			$response_array['status'] = 'success';  
			$response_array['message'] = 'Email sent!';
		}
		else
		{
			/*
				Return Error
			*/
			$response_array['status'] = 'error';  
			$response_array['message'] = 'Email Failed to Send!';
		}
		echo json_encode($response_array)
	}
}
$newEmail = new EmailSystem();
		$newEmail->controller();
?>

<?php

	echo "asdf";

?>