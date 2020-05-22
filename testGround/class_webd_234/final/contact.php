<?php
// Website Contact Form Generator 
// http://www.tele-pro.co.uk/scripts/contact_form/ 
// This script is free to use as long as you  
// retain the credit link  

// get posted data into local variables
$EmailFrom = "contact_form@atox-d.com";
$EmailTo = "anatoxind@gmail.com";
$Subject = "UPDATE | Atox-D";

$Company = Trim(stripslashes($_POST['Company'])); 
$Name = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$More_info = Trim(stripslashes($_POST['More_info']));
$Message = Trim(stripslashes($_POST['Message']));  

// prepare email body text
$Body = "";
$Body .= "Company: ";
$Body .= $Company;
$Body .= "\n";

$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";

$Body .= "More info required?: ";
$Body .= $More_info;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.htm\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
