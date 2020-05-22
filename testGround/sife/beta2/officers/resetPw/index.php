<?php
	session_register("userF");
	session_register("userL");
	if(strlen($_SESSION['userF'])==0)
		print "<meta http-equiv=\"refresh\" content=\"0;URL=../index.php\">";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>User Password Reset Page</title>
		<script type="text/javascript" src="validate.js"></script>
		<script type="text/javascript" src="../script_general.js"></script>
		
		<link rel="stylesheet" type="text/css" href="../../style.css">
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>
	<body>
		<div class="container">
			<div id='logout' onclick="location.href='../logout.php';">Log Out</div>			<br/><br/>
			<h3>Hi Kishan, <div style="float: right">User Password Reset Page</div></h3>
			<hr>
			<form name="pwRest_form" id="pwRest_form" action="resetPwProcessor.php" method="post" onsubmit="return validation()">

				<div class="input_labels">
					<label for="pwRest_oldPw" id="lbl_pwReset_oldPw">Your old password</label> <br/>
					<label for="pwRest_newPw1" id="lbl_pwReset_newPw1">New password</label> <br/>
					<label for="pwRest_newPw2" id="lbl_pwReset_newPw2">Retype the new password</label> <br/>
				</div>
				<?php
					if(strlen($_SESSION['userF'])!=0){
						echo "<div class=\"input_boxes\">";
							echo "<input type=\"password\" name=\"pwRest_oldPw\" id=\"pwRest_oldPw\" class=\"boxes\" maxlength=\"50\"> <br/><br/>";
							echo "<input type=\"password\" name=\"pwRest_newPw1\" id=\"pwRest_newPw1\" class=\"boxes\" maxlength=\"50\"> <br/><br/>";
							echo "<input type=\"password\" name=\"pwRest_newPw2\" id=\"pwRest_newPw2\" class=\"boxes\" maxlength=\"50\"> <br/><br/>";
						echo "</div>";
						echo "<input type=\"submit\" name=\"submit\" class=\"button\" id =\"buttons\" value=\"Create\">";
						echo "<input type=\"reset\" name=\"reset\" class=\"button\" id =\"buttons\" value=\"Reset\" style=\"margin: -50px auto auto 405px;\" onclick=\"document.prj_form.prj_name.focus();\">";
					}
				?>
				<div class="options" onClick="goBack()" style="margin: -40px auto auto -300px">Back</div>
			</form>

		</div>
	<body>
</html>