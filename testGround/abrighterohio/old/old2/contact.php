<?php
// Website Contact Form Generator 
// http://www.tele-pro.co.uk/scripts/contact_form/ 
// This script is free to use as long as you  
// retain the credit link  

// get posted data into local variables
$EmailFrom = "update@abrighterohio.com";
$EmailTo = "anatoxind@gmail.com";
$Subject = "Update | A Brighter Ohio";
$fame = Trim(stripslashes($_POST['fName'])); 
$lName = Trim(stripslashes($_POST['lName'])); 
$Comment = Trim(stripslashes($_POST['Comment'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Last Name: ";
$Body .= $lName;
$Body .= "\n";
$Body .= "Comment: ";
$Body .= $Comment;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.htm\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>