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
				Jir Consultancy
				<p style='font-family: verdana; font-size: 10px; font-weight: normal; margin-top: -10px;'>
					Specialists in delivering Justice Institutions reform programmes
				</p>
			</div>
			<div id='menuContainer'>
				<?php
					include_once("textContent/menuContent.php");
				?>
			</div>
			<div id='mainImage'>
				<img src='images/mainImage2.png'/>
			</div>
			<div id='textContent'>
				<h3>Company introduction at a glance</h3><hr>
				JIRC is an international development firm helping governments, businesses, civil society groups and communities design and implement groundbreaking solutions to social, institutional and political challenges.
				Consultants covering the following five primary practice areas:
				<ul>
					<li>Rule of law and access to justice</li>
					<li>Local governance</li>
					<li>Anti-corruption</li>
					<li>Civil society strengthening</li>
					<li>Conflict management and recovery</li>
				</ul>
			</div>
			<div id='footer'>
				<?php include_once("textContent/footerContent.php");?>
			</div>
		</div>
	</body> 
</html>