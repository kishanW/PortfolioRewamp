<?php
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Project Creation Page</title>
		<script type="text/javascript" src="validate.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container">
			<h3>Project Creation Page</h3>
			<hr>
			<form action="add_prj_processor.php" method="post" id="prj_form" onsubmit="return validation()">
				<div class="input_labels">
				Project Name <br/>
				Summary [Short Description] <br/>
				Description <br/>
				Owner
				</div>
				<div class="input_boxes">
				<input type="text" name="prj_name" id="prj_frm" class="boxes prj_name" maxlength="50"> <br/><br/>
				
				<input type="text" name="prj_summary" id="prj_frm" class="boxes"> <br/><br/>
				
				<input type="text" name="prj_desc" id="prj_frm" class="boxes" maxlength="50"> <br/><br/>
				
				<input type="text" name="prj_owner" id="prj_frm" class="boxes" maxlength="30"> <br/><br/>
				</div>

				<input type="submit" name="submit" class="button" id ="buttons" value="Create">
			</form>
		</div>
	<body>
</html>