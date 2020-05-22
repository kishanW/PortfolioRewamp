<?php
	session_register("userF");
	session_register("userL");
	//include("auth.class.php");
	if(strlen($_SESSION['userF'])==0){
		//print $_SESSION['userF'];
		print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Franklin SIFE | Web Mail System</title>
        <link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">
			.options{
				position: relative;
				display: block;
				margin: 2px auto auto auto;
				background:#c7eefb;
				height: 25px;
				width: 200px;
				color: #095a76;
				padding: 5px;
				border: 1px solid #b7e8fa;
				text-align: center;
				line-height: 25px;
				cursor: pointer;
			}
			.options:hover{
				background: #b7e8fa;
			}
			a{
				color: inherit;
				
			}
		</style>
		<script type="text/javascript" src="iemail.js"></script>
		<script>
			function goBack(){
				history.back();
			}
		</script>
    </head>
    <body>
	<div class="container">
       <h3>Welcome 
	<?php
		echo $_SESSION['userF']. "</h3>";
	?>
	<hr>
	<?php
		if(strlen($_SESSION['userF'])!=0)
			echo "<div class='options' onclick=\"location.href='email/';\">Send an Email</div>";
		else
			print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
	?>
	<?php
		if(strlen($_SESSION['userF'])!=0)
			echo "<div class='options' onclick=\"location.href='memberlisting/';\">List of members</div>";
	?>
    </body>
</html>