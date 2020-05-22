<?php
	//This is the main method for this.
	function mainController()
	{
		$sendStatus=sendMail();
		finalize($sendStatus);
	}
	function sendMail()
	{
		$emailFrom = "Contact Form<test@atox-d.com>";
		$emailTo = "anatoxind@gmail.com" ;
		$subject="New Message| Atox-d";
		
		if( strcmp($_REQUEST['submitOk'], "ok")==0)
		{
			$message = "Name: ". $_REQUEST['name']. "\nEmail Address: ". $_REQUEST['email']. "\nMessage: ". $_REQUEST['message'];
			//Sending the email and saving the confirmation to mailConfirmation variable.
			$mailConfirmation=mail($emailTo, "$subject",$message, "From:" . $emailFrom);
			//echo $mailConfirmation;
			unset($email, $name, $message);
			return $mailConfirmation;
		}
		return false;				
	}
	function finalize($boolean)
	{
		//JSON response array
		$response_array = array();  
		if(strcmp($boolean, "1")==0)
		{
			/*	Return Success	*/
			$response_array['status'] = 'success';  
			$response_array['message'] = 'Email sent!';
		}
		else
		{
			/*	Return Error	*/
			$response_array['status'] = 'error';  
			$response_array['message'] = 'Email Failed to Send!';
		}
		//echo strcmp($boolean, "1")==0;
		echo json_encode($response_array);
		//unset($response_array);
	}
	mainController();
?>