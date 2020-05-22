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
				<img src='images/mainImage6.png'/>
			</div>
			<div id='textContent'>
				<h3>Our Vision</h3><hr>
				Our vision, guiding JIRC's operations, is built on the three cornerstones of:
				<ul>
					<li>Strengthening democratic principles and promoting human rights</li>
					<li>With state-of-the-art expertise and high-level of field experience</li>
					<li>Through the application of a participatory and process-oriented approach.</li>
				</ul>
			</div>
			<div id='footer'>
				<?php include_once("textContent/footerContent.php");?>
			</div>
		</div>
	</body> 
</html>