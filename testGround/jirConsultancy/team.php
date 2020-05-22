<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Welcome | Jir Consultancy</title>	
		<link rel="stylesheet" href="styles/styleMain.css"/>
		<link rel="stylesheet" href="styles/styleFonts.css"/>
		
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
				<img src='images/mainImage5.png'/>
			</div>
			<div id='textContent'>
				<h3>Services</h3><hr>
				Our objectives are to offer close technical support to Governments, 
				responding to the real needs of developing countries or emerging 
				from conflict. We focus on the implementation of concrete projects 
				that fall within Justice Institution Reform including reform of 
				the criminal justice system, law-enforcement and Corrections.
				<br><br>
				JIRC works with local, state and national governments; businesses; 
				civil society groups; and communities on democracy and governance, 
				rule of law and justice, local governance, conflict management 
				and recovery, health and other sustainable development challenges. 
				Our strengths is the ability to operate in fragile, conflict or 
				post-conflict settings, providing quick action to support 
				fledgling democratic institutions until political transitions 
				are solidly entrenched.
			</div>
			<div id='footer'>
				<?php include_once("textContent/footerContent.php");?>
			</div>
		</div>
	</body> 
</html>