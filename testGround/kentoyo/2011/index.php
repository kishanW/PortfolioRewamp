<?php
session_start();		
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>User Account Creation</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type='text/javascript' src='script.js'></script>
	</head>
	<body>
		<br/>
		<br/>
		<div class="container">
			<h3>Please complete the form to register a new account</h3>
			<hr>
			<form action="stp-2.php" method="post" onsubmit="return checkMarked()">
				<div class="text_box_l">
				User name:<br>
				<input type="text" name="UName" id="UName" maxlength="20" class="input_text_box" tabindex=1>
				<br><br>
				Password:<br>
				<input type="password" name="Pww" id="Pww" maxlength="20" class="input_text_box" tabindex=3>
				<br/><br/>
				
				</div>

				<div class="text_box_r">
				Email address:<br>
				<input type="text" name="Email" id="Email" maxlength="20" class="input_text_box" tabindex=2>
				<br><br>
				Re-type the password:<br>
				<input type="password" name="RPww" id="RPww" maxlength="20" class="input_text_box" tabindex=4>
				<br/>
				<br/>
				Age:<br>
				<input type="text" name="Age" id="Age" maxlength="3" class="input_text_box" style="width:25px" tabindex=5>
				<br/>
				<br/>
				<input type="submit" name="submit" id="button" id ="button" value="Next">
				<input type="reset" name="submit" id="button" id ="button" value="Reset">
				</div>				
			</form>
			<div class="footer">
				* All the fields need be filled out to continue.
				<hr>
				Step 1 of 3
				
			</div>
		</div>
	</body>
</html>