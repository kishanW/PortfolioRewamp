<?php
// get posted data into local variables
$EmailFrom = "Add_Member@FranklinSIFE.org";
$EmailTo = "admin@franklinsife.org, kerr.annie@gmail.com";
$Subject = "New Member | Franklin SIFE";
$FirstName = Trim(stripslashes($_POST['FirstName'])); 
$LastName = Trim(stripslashes($_POST['LastName'])); 
$EmailAddress = Trim(stripslashes($_POST['EmailAddress'])); 
$Major = Trim(stripslashes($_POST['Major/Minor'])); 
$Yearsleftforgraduation = Trim(stripslashes($_POST['Yearsleftforgraduation'])); 
$aboutYou = Trim(stripslashes($_POST['aboutYou'])); 


// prepare email body text
$Body = "";
$Body .= "FirstName: ";
$Body .= $FirstName;
$Body .= "\n";
$Body .= "LastName: ";
$Body .= $LastName;
$Body .= "\n";
$Body .= "EmailAddress: ";
$Body .= $EmailAddress;
$Body .= "\n";
$Body .= "Major/Minor: ";
$Body .= $Major;
$Body .= "\n";
$Body .= "Years left for graduation: ";
$Body .= $Yearsleftforgraduation;
$Body .= "\n";
$Body .= "About the member ";
$Body .= $aboutYou;
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
