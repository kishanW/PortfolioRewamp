<!DOCTYPE html>
<html>
	<head>
		<title>Intern Blog</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="fonts/open-sans/style_fonts.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("div#header").fadeIn("slow");
				function fadeLI(elem) {
					elem.fadeIn(500, function() { 
						fadeLI($(this).next()); 
					});
					elem.css("display", "inline-block");
				}
				fadeLI($(".post:first"));
			});
		</script>
	</head><!---head-->
	
	<body>
		<div id="container">
			<div id="header">
				<h3>Hello this is Kishan's internship blog</h3>
				<div class="hr"></div>
				<div id="copyright">
					<?php echo date(Y)?> &copy | www.Atox-D.com
				</div>
			</div>
			<div id="posts">
				<?php
					include 'getEntries.php';
				?>
			</div>
		</div>
	</body><!--body-->
</html>