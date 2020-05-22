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
		
		<style>
			.prjBox{
				margin: 10px auto auto auto;
				width: 600px;
				height: auto;
				
				
			}
			#boxTitle{
				background: #39392f;
				padding: 5px;
				font-weight: bold;
				border-bottom: 1px solid #4c4c3e;
			}
			#boxContent{
				margin-top: 0px;
				background: #303027;
				padding: 5px;
				font-size: 11px;
			}
		</style>
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
				<img src='images/mainImage7.png'/>
			</div>
			<div id='textContent'>
				<h3>Our Values</h3><hr>
				<ul>
					<li>Creative solutions</li>
					<li>Commitment to integrity</li>
					<li>Success in difficult overseas settings</li>
					<li>Respect for cultural and geographic differences.</li>
				</ul>
			</div>
			<div id='footer'>
				<?php include_once("textContent/footerContent.php");?>
			</div>
		</div>
	</body> 
</html>