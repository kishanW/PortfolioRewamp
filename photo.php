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
								<div id="photo_item_head">Chihuli Glass Art Work</div>
								<p>Franklin Park Conservatory and Botanical Gardens</p>
							</li>							
							<li>
								<a href="images/photoPage/big/2.png" rel="lightbox[photo]">
									<img src="images/photoPage/2photo.jpg">
								</a>
								<div id="photo_item_head">Franklin University Street Flag</div>
								<p>Franklin University, Columbus, OH.</p>
							</li>
							<li>
								<a href="images/photoPage/big/3.png" rel="lightbox[photo]">
									<img src="images/photoPage/3photo.jpg">
								</a>
								<div id="photo_item_head">Love Note</div>
								<p>A random note found at abus stop at N High Street, Columbus.</p>
							</li>
							<li>
								<a href="images/photoPage/big/4.png" rel="lightbox[photo]">
									<img src="images/photoPage/4photo.jpg">
								</a>
								<div id="photo_item_head">Fire Works</div>
								<p>July 4th celebrations of Columbus Ohio.</p>
							</li>
							<li>
								<a href="images/photoPage/big/5.jpg" rel="lightbox[photo]">
									<img src="images/photoPage/5photo.jpg">
								</a>
								<div id="photo_item_head">Blue Lotus</div>
								<p>A random blue lotus took my eye at a temple in Sri Lanka.</p>
							</li>
							<li>
								<a href="images/photoPage/big/6.jpg" rel="lightbox[photo]">
									<img src="images/photoPage/6photo.jpg">
								</a>
								<div id="photo_item_head">Music Powers Work</div>
								<p>A picture of my favourite headset and my laptop.</p>
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