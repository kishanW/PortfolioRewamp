<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
    <head>


        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>CONF | CMS Testing | KishanW</title>
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
		session_register("user");
		$_SESSION["user"] = $_POST["user"];
		
		session_register("msg");
		$_SESSION["msg"] = $_POST["msg"];
	?>

    	<div class="container" style="height: 220px">
    	<h3 style="text-align:center;">Your comment was added...!!!</h3>
		<hr>
		<div style="width: 300px">
			<?php 
				// load the data and delete the line from the array 
				$lines = file('comments.xml'); 
				$last = sizeof($lines) - 1 ; 
				unset($lines[$last]);
				
				// write the new data to the file 
				$fp = fopen('comments.xml', 'w'); 
				fwrite($fp, implode('', $lines)); 
				fclose($fp);
			?>

			<?php
				//This will write the comment now.
				$File = "comments.xml"; 
				$Handle = fopen($File, 'a');
		
				fwrite($Handle, "<COMMENT>\n");
				fwrite($Handle, "<NAME>\n"); 
				fwrite($Handle, $user);
				fwrite($Handle, "</NAME>\n");
				
				fwrite($Handle, "<MESSAGE>\n"); 
				fwrite($Handle, $msg);
				fwrite($Handle, "</MESSAGE>\n");
				
				fwrite($Handle, "\n</COMMENT>"); 
				fwrite($Handle, "\n</COMMENTS>"); 
				fclose($Handle); 
 			?>
			<?php
				echo "<b>";
				echo $user;
				echo " said,<br>" ;
				echo $msg;
				echo "</b>";
			?>
			<form action="index.htm">
				<input type="submit" value="Go back home" id="sub_but"/>	
			</form>
		</div><!--little input bix finished--->
		</div>
    </body>
</html>
