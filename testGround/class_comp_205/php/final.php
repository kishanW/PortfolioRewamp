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
    	<div class="container" style="width: 1100px">
		<hr>
		<div style="text-align: center">
			<?php
				session_register("fName");
				session_register("lName");
				session_register("age");
				session_register("treeH");

				$_SESSION["treeH"] = $_POST["tree_height"]; 
				echo "Hi ";
				echo $_SESSION["fName"];
				
				if ($_SESSION["treeH"]!=0)
				{
					echo ", your tree size is ";
					echo $_SESSION["treeH"];
					echo "<hr/><br/>"; 
					for ($i=0; $i<$_SESSION["treeH"]; $i++)
  					{
						for ($j=0; $j<$i; $j++)
						{
							echo " * ";
						}
						echo "<br/>";
  					}
					echo "* <br/>";
					echo "* <br/>";
					echo "******<br/>";
				}
				else{
					echo "<h3>Note:You have to specify a tree height for us to draw a tree for you. </h3>";
					echo "Please use the browser '<a href='conf.php'>Back</a>' button to go back and enter a valid tree height. Thank you.";
				}
			?>
		</div>
		</div>
    </body>
</html>
