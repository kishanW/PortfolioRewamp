<!DOCTYPE HTML>
<html>
	<head>
		<title>Photography | Atox-d</title>
		<link rel="stylesheet" type="text/css" href="css/style_main.cssXXX">
		<link rel="stylesheet" type="text/css" href="css/style_main_x2.css">
		<link rel="stylesheet" type="text/css" href="fonts/open-sans/style_fonts.css">
		<link rel="stylesheet" type="text/css" href="css/style_photo.css">
		
		<link rel="stylesheet" type="text/css" href="css/style_media_queries.css">
		<style type="text/css">
			#introText{background-color: #ff8c00}
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
					<h3>Photos</h3>
					These are some of the selected photographs from my camera.
					<footer>www.atox-d.com | 2012 &copy;</footer>
				</div>
			</div><!--USER-INFO FINISHED-->

			<div id="content" pageType="contact">
				<div id="photo-entries">
					<h4>Some of the selected photographs</h4>
					
					<ul id="photoList">
						
							<li>
								<a href="images/photoPage/big/1.png" rel="lightbox[photo]">
									<img src="images/photoPage/1photo.jpg">
								</a>
								<div id="photo_item_head">Franklin SIFE</div>
								<p>HTML, CSS, JS, JQuery, PHP, XML, A Custom CMS, WordPress, Drupal</p>
							</li>							
							<li>
								<a href="images/photoPage/big/2.png" rel="lightbox[photo]">
									<img src="images/photoPage/2photo.jpg">
								</a>
								<div id="photo_item_head">Taste of Zanzibar Restaurant</div>
								<p>HTML, CSS, JS, JQuery, PHP, XML, A Custom CMS, Adobe Photoshop</p>
							</li>
							<li>
								<a href="images/photoPage/big/3.png" rel="lightbox[photo]">
									<img src="images/photoPage/3photo.jpg">
								</a>
								<div id="photo_item_head">Franklin University</div>
								<p>HTML, CSS, JS</p>
							</li>
							<li>
								<a href="images/photoPage/big/4.png" rel="lightbox[photo]">
									<img src="images/photoPage/4photo.jpg">
								</a>
								<div id="photo_item_head">Pathwell Enterprises</div>
								<p>HTML, CSS, JS</p>
							</li>
							<li>
								<a href="images/photoPage/big/5.jpg" rel="lightbox[photo]">
									<img src="images/photoPage/5photo.jpg">
								</a>
								<div id="photo_item_head">IP to Binary Application</div>
								<p>HTML, CSS, JS based application to convert IP addresses to binary equivalent </p>
							</li>
							<li>
								<a href="images/photoPage/big/6.jpg" rel="lightbox[photo]">
									<img src="images/photoPage/6photo.jpg">
								</a>
								<div id="photo_item_head">Custom CMS Testing</div>
								<p>HTML, CSS, PHP, XML, A Custom CMS</p>
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