<?php
	if (isset($_REQUEST['emailTo']))
	//if "email" is filled out, send email
	{
		include_once("email2Processor.php");
		$newEmail = new EmailSystem();
		$newEmail->controller();
	}
	else
	//if "email" is not filled out, display the form
	{
		include_once("email2html.php");
	}
?>