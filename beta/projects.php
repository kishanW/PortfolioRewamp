<!DOCTYPE HTML>
<html>
	<head>
		<title>Projects | Atox-d</title>
		<link rel="stylesheet" type="text/css" href="css/style_main.cssXXX">
		<link rel="stylesheet" type="text/css" href="css/style_main_x2.css">
		<link rel="stylesheet" type="text/css" href="fonts/open-sans/style_fonts.css">
		<link rel="stylesheet" type="text/css" href="css/style_photo.css">
		
		<link rel="stylesheet" type="text/css" href="css/style_media_queries.css">
		<style type="text/css">
			#introText{background-color: #00A300}
		</style>
		
		<script src="lightbox/js/jquery-1.7.2.min.js"></script>
		<script src="lightbox/js/lightbox.js"></script>
		<link href="lightbox/css/lightbox.css" rel="stylesheet" />
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
					<h3>Projects</h3>
					These are some of the selected projects from the repository.
					<footer>www.atox-d.com | 2012 &copy;</footer>
				</div>
			</div><!--USER-INFO FINISHED-->

			<div id="content" pageType="contact">
				<div id="photo-entries">
					<h4>Some of the selected photographs</h4>
					
					<ul id="photoList">
						
							<li>
								<a href="images/projects/big/1.png" rel="lightbox[photo]">
									<img src="images/projects/1.png">
								</a>
								<div id="photo_item_head">Franklin SIFE</div>
								<a href="http://www.franklinsife.org/old/2012/" target="_blank">HTML, CSS, JS, JQuery, PHP, XML, A Custom CMS, WordPress, Drupal</a>
							</li>							
							<li>
								<a href="images/projects/big/2.png" rel="lightbox[photo]">
									<img src="images/projects/2.png">
								</a>
								<div id="photo_item_head">Atox-D Branding</div>
								<p>Logo design for personal portfolio. Adobe Photoshop</p>
							</li>
							<li>
								<a href="images/projects/big/3.png" rel="lightbox[photo]">
									<img src="images/projects/3.png">
								</a>
								<div id="photo_item_head">Taste of Zanzibar</div>
								<a href="http://atox-d.com/testGround/tozanzibar/beta_2/" target="_blank">HTML, CSS, JS, JQuery, PHP, Adobe Photoshop</a>
							</li>
							<li>
								<a href="images/projects/big/4.png" rel="lightbox[photo]">
									<img src="images/projects/4.png">
								</a>
								<div id="photo_item_head">A Brighter Ohio</div>
								<a href="http://atox-d.com/testGround/abrighterohio/" target="_blank">HTML, CSS, JS, PHP</a>
							</li>
							<li>
								<a href="images/projects/big/5.png" rel="lightbox[photo]">
									<img src="images/projects/5.png">
								</a>
								<div id="photo_item_head">Course Work, Franklin University</div>
								<a href="">Logo design for an example company.</a>
							</li>						
					</ul>
				</div><!--FORM FINISHED-->				
			</div><!--CONTENT FINISHED-->

			<div id="floatMenu-x2">
				<?php 
					/* IMPORTING THE FLOATx2 MENU */
					include("floatMenux2.php");
				?>
			</div><!--MENU FINISHED-->
			
		</div>
	</body>
</html> 