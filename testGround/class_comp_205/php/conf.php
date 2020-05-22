<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Assignment 5-1 | COMP_205 | KishanW</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript">
            /*
             The Javascript area.
             <script type="text/javascript" src="script.js">
             */			
        </script>
    </head>
    <body>
	<?php
		session_register("fName");
		session_register("lName");
		session_register("age");
		session_register("treeH");

		$_SESSION["fName"] = $_POST["fName"];
		$_SESSION["lName"] = $_POST["lName"];
		$_SESSION["age"] = $_POST["age"];
	?>

    	<div class="container" style="height: 220px">
    	<h3 style="text-align:center;">Hi <?php echo $_SESSION["fName"]; ?>!</h3>
		<hr>
		<div style="width: 300px">
			So this is your information,
			<br><br>
			Your name is 
			<?php echo $_SESSION["fName"]; ?> <?php echo $_SESSION["lName"]; ?>. 
			You are 
			<?php echo $_SESSION["age"]; ?> years old.
			<hr>
			<form action="final.php" method="post">
				How tall would you like your tree to be?
				<br><br>
				<input type="text" name="tree_height" id="age" maxlength="2">
				<br><br>
				<input type="submit" value="Submit" id="sub_but"/>	
			</form>
		</div><!--little input bix finished--->
		</div>
    </body>
</html>
