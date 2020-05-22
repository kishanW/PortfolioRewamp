<?php
//Constants
$EmailFrom = "notification@polytrader.com";
$EmailTo = "radheekakishan@gmail.com";
$Subject = "Contact Form | PolyTrader";

$lName = Trim(stripslashes($_POST['name']));
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message']));  

// prepare email body text
$Body = "";
$Body .= "First Name: ";
$Body .= $lName;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  echo "Message Sent Successfully";
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
}
else{
  echo "Message Sending Failed";
  //print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
}
?>
