<?php
	session_register("userF");
	if(strlen($_SESSION['userF'])!=0){
		print "<meta http-equiv=\"refresh\" content=\"0;URL=main_opts.php\">";
	}
	if(!isset($_SESSION)) 
	{ 
		session_start();		
		// store session data
		$_SESSION['userF']="";
		$_SESSION['userL']="";
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Officers Login | Franklin SIFE</title>
        <link rel="stylesheet" type="text/css" href="../../style.css">
        <link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">
			.container{
				width: 600px
			}
			.footer{
				color: inherit;
			}
			body{
				color: gray;
			}
			.options{
				position: relative;
				display: block;
				margin: 2px auto auto 0px;
				background:#c7eefb;
				height: 25px;
				width: 70px;
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
       <h3>Franklin SIFE | Officers Login Page</h3>
	<hr>
	<p>
		Authorized personals only. Please enter your login information to proceed.
	</p>
	<br/>
	<form action="auth.class.php" method="post" onsubmit="return checkMarked()">
			<div id="main_form_area" style="border: 1px solid lightgray; width: 220px; margin-left: 0px">
				<!---subject--->
				Username: &nbsp;
				<input type="text" name="username" class="form_element" maxlength="30" onfocus="clearThings('username')" onblur="resetNeed('username')"> <br/><br/>
				Password: &nbsp;&nbsp;
				<input type="password" name="password" class="form_element" maxlength="10" onfocus="clearThings('password')" onblur="resetNeed('password')"> <br/><br/>

				<input type="submit" name="submit" class="options" id ="button_login" value="Login">
			</div>
	</form>
	<div class="footer" style="">
                <hr>www.FranklinSIFE.org | 2010 &#169
	</div>
    </body>
</html>