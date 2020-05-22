<?php
//$email  = "test@sampledomain.com";
$email  = "anatoxind@gmail.com.com";

$name = validate_input($_POST['name'], "Enter Name");
$subject = validate_input($_POST['subject'], "Enter your subject");
$email = validate_input($_POST['email'], "Enter your email address");
$comments = validate_input($_POST['comments'], "Enter Your Comments");
echo $name;
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    display_error("Good Job!!! No Errors!!!!");
}

$message = "Hello! Form Submitted by: \nName:". $names. "E-mail: ". $email. "E-mail: ". $comments;
mail($email, $subject, $message);
//header('Location: contact.php')
//exit("exiting");


//Validating Inputs
function validate_inputs($data, $problem = "")
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if (strlen($data) == 0)
    {
        display_error($problem);
    }
    return $data;
}

function display_error($myError)
{

    echo "<html><body><b>Please fix the errors listed below:</b><br />";
    echo $myError;
	echo "</html>";
	//exit();
}
?>