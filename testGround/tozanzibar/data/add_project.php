
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Project Creation Page</title>
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
			<hr>
			<form name="prj_form" id="prj_form" action="add_prj_processor.php" method="post" onsubmit="return validation()">
				<div class="input_labels">
					<label for="item_name" id="lbl_name">Item Name </label> <br/>
					<label for="item_price" id="lbl_price">Price </label> <br/>
					<label for="item_desc" id="lbl_desc">Desc</label> <br/>
				</div>

				<div class="input_boxes">
					<input type="text" name="item_name" id="item_name" class="boxes" maxlength="50"> <br/><br/>
					<input type="text" name="item_price" id="item_price" class="boxes" maxlength="30"> <br/><br/>
					<textarea name="item_desc" id="item_desc" class="boxes"></textarea><br/><br/>
				</div>

				<input type="submit" name="submit" class="button" id ="buttons" value="Create">
				<input type="reset" name="reset" class="button" id ="buttons" value="Reset" style="margin: -50px auto auto 405px;" onclick="document.prj_form.prj_name.focus();">
			</form>
		</div>
	<body>
</html>