<?php
session_start();

session_register('UName');
session_register('Pww');
session_register('RPww');
session_register('Email');
session_register('Dob');

session_register('ChName');
session_register('Gender');
session_register('RC');
session_register('CL');

$_SESSION['$ChName'] =Trim(stripslashes($_POST['ChName'])); 
$_SESSION['$Gender'] =Trim(stripslashes($_POST['Gender']));
$_SESSION['$RC']=Trim(stripslashes($_POST['RC'])); 
$_SESSION['$CL']=Trim(stripslashes($_POST['CL']));

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>User Account Creation</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container">
			<h3>Account Summary</h3>
			<hr>
			<?php
				echo "User Name: ". $_SESSION['UName']. "<br>";
				//echo "Password: ". $_SESSION['Pww']. "<br>";
				//echo "Retyped Password: ". $_SESSION['RPww']. "<br>";
				echo "Email Address: ". $_SESSION['Email']. "<br>";
				//echo "D.O.B: ". $_SESSION['Dob']. "<br>";

				echo "<hr>Character Name: ". $_SESSION['ChName']. "<br>";
				echo "Gender: ". $_SESSION['Gender']. "<br>";
				echo "Race: ". $_SESSION['RC']. "<br>";
				echo "Class: ". $_SESSION['CL']. "<br>";
				session_destroy();
			?>
			<hr>
			<form name="final" action="index.php" method="post">
				<input type="submit" name="submit" id="button" id ="button" value="Submit" style="margin-top: auto" onClick="alert('Thank you!\n A Confirmation Email has been sent to you!');";>
				<input type="reset" name="submit" id="button" id ="button" value="Reset" onClick="window.location = 'index.php';">
			</form>
			<div class="footer">
				* All the fields need be filled out to continue.
				<hr>
				Step 3 of 3
			</div>
		</div>
	</body>
</html>