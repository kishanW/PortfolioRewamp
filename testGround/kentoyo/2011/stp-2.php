<?php
session_start();

session_register('UName');
session_register('Pww');
session_register('RPww');
session_register('Email');
session_register('Dob');

$_SESSION['$UName']=Trim(stripslashes($_POST['UName'])); 
$_SESSION['$Pww']=Trim(stripslashes($_POST['Pww']));
$_SESSION['$Email']=Trim(stripslashes($_POST['Email'])); 
$_SESSION['$Dob']=Trim(stripslashes($_POST['Dob']));
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
		<div class="container">
			<h3>Character Creation</h3>
			<hr>
			<form name="ChForm"action="stp-3.php" method="post" onsubmit="return validation(ChForm)">
				<div class="text_box_l">
				Character name:<br>
				<input type="text" name="ChName" id="ChName" maxlength="20" class="input_text_box">
				<br><br>
				Gender:<br>
				Male
				<input type="radio" name="Gender" value="Male">
				Female
				<input type="radio" name="Gender" value="Female">
				<br/><br/>
				Race <br/>
				<select name="RC" id="RC"  onChange="findRC(ChForm)">
					<option value="0">Select Race</option>
					<option value="Human">Human</option>
					<option value="Elves">Elves</option>
					<option value="Dwarves">Dwarves</option>
					<option value="Orcs">Orcs</option>
					<option value="Undead">Undead</option>
				</select>
				<br/><br/>

				Class<br/>
				<select name="CL" id="CL" onChange="findCL(ChForm)">
					<option value="0">Select Class</option>
					<option value="Warrior">Warrior</option>
					<option value="Mage">Mage</option>
					<option value="Priest">Priest</option>
					<option value="Ranger">Ranger</option>
					<option value="Thief">Thief</option>
				</select>
				<br/><br/>
				<div id="infobox1">Please Select a Race</div>
				<div id="infobox2">Please Select a Class</div>
				<input type="submit" name="submit" id="button" id ="button" value="Next" style="margin-top: 150px">
				<input type="reset" name="submit" id="button" id ="button" value="Reset">
				</div>				
			</form>
			<div class="footer">
				* All the fields need be filled out to continue.
				<br>
				* Race description was taken from wiki.utopia-game.com
				<br>
				* Class description was taken from wiki.guildwars.com
				<hr>
				Step 2 of 3
				
			</div>
		</div>
	</body>
</html>