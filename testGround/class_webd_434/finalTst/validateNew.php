<?php
//$email  = "test@sampledomain.com";
$emailTo  = "anatoxind@gmail.com";

/**
	Saving all the variables sent from the form.
*/
$name = validate_input($_REQUEST["name"], "Enter Name");
$subject = validate_input($_REQUEST["subject"], "Enter your subject");
$emailIn = validate_input($_REQUEST["email"], "Enter your email address");
$comments = validate_input($_REQUEST["comments"], "Enter Your Comments");


/**
	Validating the email address. If there are any errors it will return a 0. 
	If there are no errors the return will be <0
*/
if ((preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $emailIn))!=0)
{
	echo "No errors were found and your message was sent as well.";
}
else
{
	display_error("Enter a valid email");
}
/**
	Preparing the email body.
*/
$message = "Hello! Form Submitted by: \nName:". $names. "\nE-mail: ". $emailIn. "\nComment: ". $comments;

/**
	Sending Email.
	$mailStstus: 	This holds the confirmation weather the email was sent or not.
					Successful email=1, unsuccessfull email=0
*/
$mailStatus=mail($emailTo, $subject, $message);

/**
	Redirection on successful email confirmaton. Modified header used.
	This will wait 10seconds before redirecting. Allows the script to
	show any messages on email success.
*/
if($mailStatus==1)
{
	//header('Location: contact.php');
	header("Refresh: 5; url=contact.php");
	exit();
}

/**
	Validating Inputs
*/
function validate_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        display_error($problem);
    }
    return $data;
}

/**
	Printing errors to the screen.
*/
function display_error($myError)
{

    echo "<html><body><b>Please fix the errors listed below:</b><br />";
    echo $myError;
	echo "</p></body></html>";
	exit();
}

?>