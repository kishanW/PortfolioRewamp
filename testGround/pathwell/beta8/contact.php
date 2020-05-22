<?php
// Website Contact Form Generator 
// http://www.tele-pro.co.uk/scripts/contact_form/ 
// This script is free to use as long as you  
// retain the credit link  

// get posted data into local variables
$EmailFrom = "update@pathwell.com";
$EmailTo = "anatoxind@gmail.com";
$Subject = "UPDATE | pathwell_online";
$Company = Trim(stripslashes($_POST['Company'])); 
$Name = Trim(stripslashes($_POST['Name'])); 
$Title = Trim(stripslashes($_POST['Title'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Automotive = Trim(stripslashes($_POST['Automotive'])); 
$Aviation = Trim(stripslashes($_POST['Aviation'])); 
$ConsumerProducts = Trim(stripslashes($_POST['ConsumerProducts'])); 
$Medical = Trim(stripslashes($_POST['Medical'])); 
$Other = Trim(stripslashes($_POST['Other'])); 
$Comment = Trim(stripslashes($_POST['Comment'])); 

// validation
$validationOK=true;
if (Trim($Name)=="") $validationOK=false;
if (Trim($Email)=="") $validationOK=false;
if (Trim($Comment)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Company: ";
$Body .= $Company;
$Body .= "\n";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Title: ";
$Body .= $Title;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Automotive: ";
$Body .= $Automotive;
$Body .= "\n";
$Body .= "Aviation: ";
$Body .= $Aviation;
$Body .= "\n";
$Body .= "ConsumerProducts: ";
$Body .= $ConsumerProducts;
$Body .= "\n";
$Body .= "Medical: ";
$Body .= $Medical;
$Body .= "\n";
$Body .= "Other: ";
$Body .= $Other;
$Body .= "\n";
$Body .= "Comment: ";
$Body .= $Comment;
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
