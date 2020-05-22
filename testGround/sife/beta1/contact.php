<?php
// Website Contact Form Generator 
// http://www.tele-pro.co.uk/scripts/contact_form/ 
// This script is free to use as long as you  
// retain the credit link  

// get posted data into local variables
$EmailFrom = "contact_form@FranklinSIFE.com";
$EmailTo = "anatoxind@gmail.com";
$Subject = "UPDATE | FranklinSIFE";

$fName = Trim(stripslashes($_POST['fName'])); 
$lName = Trim(stripslashes($_POST['lName'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$cList = Trim(stripslashes($_POST['cList']));
$Message = Trim(stripslashes($_POST['Message']));  

// prepare email body text
$Body = "";
$Body .= "First Name: ";
$Body .= $fName;
$Body .= "\n";

$Body .= "Last Name: ";
$Body .= $lName;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";

$Body .= "Add email to the contact SIFE contact list: ";
$Body .= $cList;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.htm\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contact.htm\">";
}
?>
