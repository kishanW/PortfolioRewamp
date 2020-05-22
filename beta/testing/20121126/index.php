<!DOCTYPE HTML>
<html>
	<head>
		<title>Welcome | Atox-d</title>
		<link rel="stylesheet" type="text/css" href="css/style_main.css">
		<link rel="stylesheet" type="text/css" href="fonts/open-sans/style_fonts.css">
		
		<style type="text/css">
			@media screen and (max-width: 1110px){
				#container{width: 275px;}
				#content{display: none;}
				#floatMenu{float: none;}
			}
		</style>
		<?php 
			/* Aniamtion efects for the document */
			include('documentEffects.php');
		?>
	</head>
	<body>
		<div id="container">
			<div id="userInfo">
				<div id="userPic"><img src="images/userPic-2.jpg"></div>
				<div id="introText" class="box">
					<h3>Hello there!</h3>
					My name is Kishan and I build good looking websites with clean coding. This is my portfolio...
					<footer>
					
					www.atox-d.com | 2012 &copy;</footer>
					
				</div>
			</div>
			<div id="content">
				<img src="images/slideshow/2.jpg">
			</div>
			<div id="floatMenu">
				<div id="projects" class="box">
					<a href="#projects.php">
						<img src="images/icons/projects.png">
						<h3>Projects</h3>
						Showcase of all the projects
					</a>
				</div>
				<div id="photography" class="box">
					<a href="#photo.php">
						<img src="images/icons/photo.png">
						<h3>Photography</h3>
						My snaps
					</a>
				</div>
				<div id="repo" class="box">
					<a href="repo.php">
						<img src="images/icons/misc_projects.png">
						<h3>Repository</h3>
						Current misc projects
					</a>
				</div>
				<div id="contact" class="box">
					<a href="contact.php">
						<img src="images/icons/contact.png">
						<h3>Contact</h3>
						How to find me
					</a>
				</div>
				
			</div>
			
		</div>
	</body>
</html> 