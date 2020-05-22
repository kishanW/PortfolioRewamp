<?php
if (isset($_REQUEST['emailTo']))
//if "email" is filled out, send email
  {
  //send email
  $emailFrom =  $_REQUEST['emailFrom'];
  $emailTo = $_REQUEST['emailTo'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;

  $headers = "From: ". $emailFrom. "\r\n";
  $headers .= "Reply-To:". $emailFrom. "\r\n";
  $headers .= "Return-Path: mail.franklin.edu\r\n";
  //$headers .= "CC: sombodyelse@noplace.com\r\n";
  //$headers .= "BCC: hidden@special.com\r\n";

  mail($emailTo, $subject, $message, $headers);
  echo "Thank you for using our mail form";
  unset($emailTo, $emailFrom, $subject, $message);
  print "<meta http-equiv=\"refresh\" content=\"3;URL=email1Processor.php\">";
  }
else
//if "email" is not filled out, display the form
  {
	include_once("email1.php");
  }
?>