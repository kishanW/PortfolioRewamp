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
        <title>Main Control Panel | Franklin SIFE</title>
	 <link rel="stylesheet" type="text/css" href="../style.css">
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
	<?php
		//unset($_SESSION['userF']);
		echo "<div id='logout' onclick=\"location.href='logout.php';\">Log Out</div>";
	?>
       <h3>Welcome  
	<?php
		echo $_SESSION['userF']. ", </h3>";
	?>
	<hr>
	<div id="categories">
		<?php
			if(strlen($_SESSION['userF'])!=0){
				echo "Communications<hr>";
				echo "<div class='options' onclick=\"location.href='email/';\">Send an Email</div>";
				echo "<div class='options' onclick=\"location.href='memberlisting/';\">List of members</div><br>";

				echo "Project Management<hr>";
				echo "<div class='options' onclick=\"location.href='projects/add_project.php';\">Create a new project</div>";
				echo "<div class='options' onclick=\"location.href='projects/';\">View all the created projects</div><br/>";

				echo "Event Management<hr>";
				echo "<div class='options' onclick=\"location.href='events/add_event.php';\">Create a new event</div>";
				echo "<div class='options' onclick=\"location.href='events/';\">View all the created events</div><br/>";

				echo "User profile<hr>";
				echo "<div class='options' onclick=\"location.href='resetPw/';\">Change your password</div>";
			}
			else
				print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
		?>
	</div>
	<?php
		if(strlen($_SESSION['userF'])!=0)
			
	?>
    </body>
</html>