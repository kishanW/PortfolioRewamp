<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact Me | Atox-d</title>
		<link rel="stylesheet" type="text/css" href="css/style_main.cssXXX">
		<link rel="stylesheet" type="text/css" href="css/style_main_x2.css">
		<link rel="stylesheet" type="text/css" href="fonts/open-sans/style_fonts.css">
		<link rel="stylesheet" type="text/css" href="css/style_contact.css">
		<link rel="stylesheet" type="text/css" href="css/style_media_queries.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="js/checkForm.js" type="text/javascript"></script>
		<style type="text/css">
			#introText{background-color: #696969}
		</style>
		<?php 
			/* Aniamtion efects for the document */
			include('documentEffects.php');
		?>
		<script type="text/javascript">
	      $(document).ready(function(){
	      $("div#formSubmitError").hide();
	    });
	  </script>
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
				<form id="contactForm" name="contactForm" action="contactProcessor.php" method="post" onsubmit="return checkFields()">
					Your Name<BR>
					<input type="text" name="senderName" maxlength="30" autofocus="autofocus" value=""> <BR><BR>

					Your Email Address<BR>
					<input type="text" name="senderEmail" autocomplete="off" onblur="emailField(this.name)" value=""><BR><BR>
					
					Message<BR>
					<textarea name="message"></textarea><br><br>
					<input type="submit" id="submit-button" value="Send">
					<div id="formSubmitError" onclick="hideFormSubmitError()">
						<img src="images/icons/ic_cancel.png">
					</div>
				</form><!--FORM FINISHED-->
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