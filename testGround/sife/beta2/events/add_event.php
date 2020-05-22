<?php
	session_register("userF");
	session_register("userL");
	if(strlen($_SESSION['userF'])==0)
		print "<meta http-equiv=\"refresh\" content=\"0;URL=../index.php\">";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Event Creation Page</title>
		<script type="text/javascript" src="validate.js"></script>
		<script type="text/javascript" src="../script_general.js"></script>
		
		<link rel="stylesheet" type="text/css" href="../../style.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container">
			<?php
				//unset($_SESSION['userF']);
				echo "<div id='logout' onclick=\"location.href='../logout.php';\">Log Out</div>";
			?>
			<br/><br/>
			<h3>Hi <?php echo $_SESSION['userF'];?>, <div style="float: right">Event Creation Page</div></h3>
			<hr>
			<form name="event_form" id="event_form" action="add_event_processor.php" method="post" onsubmit="return validation()">
				<div class="input_labels">
					<label for="event_name" id="lbl_name">Event title </label> <br/>
					<label for="event_owner" id="lbl_owner">Date</label> <br/>
					<label for="event_desc" id="lbl_desc">Description </label> <br/>
				</div>

				<div class="input_boxes">
					<input type="text" name="event_name" id="event_name" class="boxes" maxlength="50"> <br/><br/>
					<input type="text" name="event_date" id="event_date" class="boxes" maxlength="50"> <br/><br/>
					<textarea name="event_desc" id="event_desc" class="boxes"></textarea><br/><br/>
				</div>

				<input type="submit" name="submit" class="button" id ="buttons" value="Create">
				<input type="reset" name="reset" class="button" id ="buttons" value="Reset" style="margin: -50px auto auto 405px;" onclick="document.prj_form.prj_name.focus();">
				<div class="options" onClick="goBack()" style="margin: -40px auto auto -300px">Back</div>
			</form>
		</div>
	<body>
</html>