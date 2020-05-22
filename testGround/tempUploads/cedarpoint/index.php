<?php
	function readImg(){
		//echo "Cedar Point Pictures<hr>";
		if ($handle = opendir('images/')) {
			//echo "Directory handle: $handle\n";
			//echo "Files:\n";
		
			/* This is the correct way to loop over the directory. */
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") {
					echo "<img src='images/". $file. "'/><br/>\n";
				}
			}	
			closedir($handle);
		}
	}
?>
<html>
	<head>
		<title>Cedar Point Trip</title>
		<!--From Nevo Slider-->
		<link rel="stylesheet" href="nivo/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid Sans">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
		<script src="nivo/scripts/jquery.nivo.slider.pack.js" type="text/javascript"></script>

		<script type="text/javascript">
			$(window).load(function() {
			//Reference for Nivo Slider
			//http://snedekerdesignz.webs.com/apps/forums/topics/show/4505162-nivo-slider?page=last

			$('#slider').nivoSlider({
				controlNav:false, // 1,2,3... navigation
				effect:'sliceDown', // Specify sets like: 'fold,fade,sliceDown'
			});
			});
		</script>
		<style>
			body{
				background: #131515;
			}
			body hr{background: #cdd0d1}
			.container{position: relative; padding: 10px; margin: auto auto; width: 800px; height: 800px; background: #232627}
			#headTitle{position: relative; text-align: center; color: #cdd0d1; font-family: 'Droid Sans'; font-weight: 100; font-size: 36px}
			#slider {
				position:relative;
				width:800px; /* Change this to your images width */
				height:800px; /* Change this to your images height */
				background: black url(nivo/loading.gif) no-repeat 50% 50%;
				overflow: hidden;
				border: 0px solid lightgray;
			}
			#slider img {
				position:absolute;
				top:0px;
				left:0px;
				display:none;
			}
			#slider a {
				border:0;
				display:block;
			}
			.nivo-controlNav{
				opacity: 0.0;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div id="headTitle">
				Cedar Point Trip<hr>
			</div>
			<!-- Then somewhere in the <body> section -->
			<div id="slider" class="nivoSlider" style="margin: auto auto">
			    <?php readImg(); ?>
			</div>
		</div>
	</body>
</html>