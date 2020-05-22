<!DOCTYPE HTML>
<html>
	<head>
		<title>Welcome | Atox-d</title>
		<link rel="stylesheet" type="text/css" href="css/style_main.cssXXX">
		<link rel="stylesheet" type="text/css" href="css/style_main_x2.css">
		<link rel="stylesheet" type="text/css" href="fonts/open-sans/style_fonts.css">
		<link rel="stylesheet" type="text/css" href="css/style_contact.css">
		<link rel="stylesheet" type="text/css" href="css/style_media_queries.css">
		<style type="text/css">
			#introText{background-color: #696969}
		</style>
		<script type="text/javascript">
			$(document).ready(
				function(){

				}
			);
		</script>
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
					<h3>Contact Me</h3>
					Please use the following form to shoot me an email.
					
					<footer>www.atox-d.com | 2012 &copy;</footer>
				</div>
			</div><!--USER-INFO FINISHED-->

			<div id="content" pageType="contact" style="overflow:hidden;">
				<form id="contactForm" action="contactProcessor.php" method="post">
					Your Name<BR>
					<input type="text" name="senderName" maxlength="30" autofocus="autofocus"> <BR><BR>

					Your Email Address<BR>
					<input type="text" name="senderEmail" autocomplete="off"><BR><BR>
					
					Message<BR>
					<textarea name="message"></textarea><br><br>
					<input type="submit" id="submit-button" value="Send">
				</form><!--FORM FINISHED-->
				<div id="msgbox" style="display:none">
					<img src="images/icons/ic_cancel.png" style="float:left; height:32px; width:32px; margin-right: 20px;">
					<span id="msg">This is a responce message.</span>
				</div>				
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