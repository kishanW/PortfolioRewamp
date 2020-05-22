<!DOCTYPE HTML>
<html>
	<head>
		<title>Welcome | Atox-d</title>
		<link rel="stylesheet" type="text/css" href="css/style_main.css">
		<link rel="stylesheet" type="text/css" href="fonts/open-sans/style_fonts.css">
		
		<!---NIVO SLIDER-->
		<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(window).load(function() {
			    $('#slider').nivoSlider({
			    	effect: 'fold'
			    });
			});
		</script>
		<!---NIVO SLIDER FINISHED-->

		<style type="text/css">
			@media screen and (max-width: 1110px){
				#container{width: 275px;}
				#content{display: none;}
				#floatMenu{float: none;}
			}
			.nivoSlider {
			    position:relative;
			    background:url(nivo-slider/themes/default/loading.gif) no-repeat 50% 50%;
			}
			.nivoSlider img {
			    position:absolute;
			    top:0px;
			    left:0px;
			    display:none;
			}
			.nivoSlider a {
			    border:0;
			    display:block;
			}
			.theme-default .nivo-controlNav{
				margin-top: -60px;
			    position: relative;
			    z-index: 9999;
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
				<div class="slider-wrapper theme-default">
				    <div id="slider" class="nivoSlider">
				        <img src="images/slideshow/1.png" alt="" />
				        <img src="images/slideshow/2.png" alt="" />
				        <img src="images/slideshow/3.png" alt="" />
				        <img src="images/slideshow/4.png" alt="" />
				        <img src="images/slideshow/5.png" alt="" />
				        <img src="images/slideshow/6.png" alt="" />
				        <img src="images/slideshow/7.png" alt="" />
				        <img src="images/slideshow/8.png" alt="" />
				        <img src="images/slideshow/9.png" alt="" />
				        <img src="images/slideshow/10.png" alt="" />
				    </div>
				</div>
				<div id="htmlcaption" class="nivo-html-caption">
				    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
				</div>
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
					<a href="photo.php">
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