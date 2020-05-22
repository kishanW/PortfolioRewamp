<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Contact Us| Jir Consultancy</title>	
		<link rel="stylesheet" href="styles/styleMain.css"/>
		<link rel="stylesheet" href="styles/styleFonts.css"/>
		<style>
			#name, #email, #message{
				border: 1px solid #4c4c3e;
				font-family: PTSans, verdana;
				font-size: 11px;
			}
			#name:focus, #email:focus, #message:focus{
				border: 1px solid #10b9c2;
			}
			#message{
				width: 100%
			}
			#name, #email{
				width: 50%;
			}
		</style>
		<script src="js/contact.js" type="text/javascript"></script>  
		
		<!--The files needed for the menu-->
		<link rel="stylesheet" href="animated-menu/animated-menu.css"/>
		<script src="http://jqueryjs.googlecode.com/files/jquery-1.3.js" type="text/javascript"></script>  
		<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>  
		<script src="animated-menu/animated-menu.js" type="text/javascript"></script>  
	</head>
	<body>
		<div id='container'>
			<div id='headerTitle'>
				<?php
					include_once("textContent/header.php");
				?>
			</div>
			<div id='menuContainer'>
				<?php
					include_once("textContent/menuContent.php");
				?>
			</div>
			<div id='mainImage'>
				<img src='images/mainImage3.png'/>
			</div>
			<div id='textContent'>
				<h3>Contact Us</h3><hr>
				You can use this web form to send us a message or you can email us at <a href="mailto:info@jirconsultancy.com?subject=Update | JirConsultancy">info@jirconsultancy.com</a>.
				<br><br>
				<form name='contactForm' id='contactForm' action="contactProcessor.php" method="post" onsubmit="return checkFields()">
					Name:
					<input type="text" name="name" id="name" maxlength="20" value="Your Name" onfocus="clearThings(this.name)" onblur="resetNeed(this.name)">
					<br><br>
					Email:
	                <input type="text" name="email" id="email" maxlength="30" value="Your email address" onfocus="clearThings(this.name)" onblur="resetNeed(this.name)">
	                <hr>
					Message<br>
	                <textarea name="message" id="message"  onfocus="clearThings(this.name)" onblur="resetNeed(this.name)">Your message goes here.</textarea>
	                <br>
	                <br>
	                <input type="submit" name="submit" id ="button" value="Send"> <input type="reset" value="Clear" id="reset">
				</form>
			</div>
			<div id='footer'>
				<?php include_once("textContent/footerContent.php");?>
			</div>
		</div>
	</body> 
</html>