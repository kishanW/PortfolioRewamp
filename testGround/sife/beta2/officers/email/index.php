<?php
	session_register("userF");
	session_register("userL");
	if(strlen($_SESSION['userF'])==0)
		print "<meta http-equiv=\"refresh\" content=\"0;URL=../index.php\">";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Franklin SIFE | Web Mail System</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="../../style.css">

		<script type='text/javascript' src='../script_general.js'></script>

		<style type="text/css">
			.options{
				margin: 2px auto auto 2px;
			}
			#logout{
				margin-top: 5px;
			}
			#email_form_subject{
				width: 340px;
			}
		</style>
		<?php
			if(strlen($_SESSION['userF'])!=0){
				echo "<script type='text/javascript' src='iemail.js'></script>";
			}
		?>
	</head>
	<body>
		<div class="container">
			<?php
				//unset($_SESSION['userF']);
				echo "<div id='logout' onclick=\"location.href='../logout.php';\">Log Out</div>";
			?>
			<br/>
	       	<h3>This is the web email system for Franklin SIFE</h3>
		   	<hr>
		   	Please select who you want to email today from the options given below,<br/>
			<form name="email_form" action="iemail.class.php" method="post" onsubmit="return checkMarked()">
				<input type="checkbox" id="member" value="M"/> Members
				<input type="checkbox" id="officer" value="O"/> Officers
				<input type="checkbox" id="alumni" value="A"/> Alumni
				<br/><br/>
				<input type="hidden" id="parties" name="parties"></input>
				
				<div id="main_form_area">
					<!---subject--->
					Subject: &nbsp;
					<input type="text" name="subject" id="email_form_subject" class="form_element"> <br/><br/>
					

					<!---Email body--->
					<textarea id ="message" class="form_element" name="message" onfocus="clearThings('message')" onblur="resetNeed('message')">Your message goes here.</textarea>
		
					<br/><br/>
					<?php
						if(strlen($_SESSION['userF'])!=0){
							echo "<input type='submit' name='submit' class='options' id =\"button_submit\" value='Send'>";
							echo "<input type='reset' value='Clear' class='options' id='reset'>";
						}
					?>
				</div>
	   		</form>
			<div class="options" onClick="goBack()">Back</div>
		</div>
	</body>
</html>