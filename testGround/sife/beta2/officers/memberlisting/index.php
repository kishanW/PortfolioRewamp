<?php
	session_register("userF");
	session_register("userL");
	include("member_listing.php");
	if(strlen($_SESSION['userF'])==0)
		print "<meta http-equiv=\"refresh\" content=\"0;URL=../index.php\">";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Franklin SIFE | Members List</title>
        <link rel="stylesheet" type="text/css" href="../../style.css">
        <link rel="stylesheet" type="text/css" href="../style_menu.css">

	 <script type='text/javascript' src='../script_general.js'></script>
		<?php
			if(strlen($_SESSION['userF'])!=0){
				echo "<script type=\"text/javascript\" src=\"members_script.js\"></script>";
			}
		?>
		<style type="text/css">
			body{
				color: white;
			}
			#srnd h3{
				color: white;
			}
			.box{
				width: auto;
				height: auto;
				padding: 10px;
				/*background: #fd4087;
				border: 0px solid #f7025e;*/
								
			}
			#name{
				float: left;
			}
			#date{
				margin-right: 20px;
				float: right;
			}
			#email{
				margin-right: 20px;
				float: right;
				border-right: 1px solid white;
			}
			#MEMID{
				margin: 0px auto auto auto;
				float: left;
				color: inherit;
				text-align: right;
				border-right: 1px solid white;
			}
			#srnd{
				margin: 1px auto auto auto;
				width: 550px;
				height: 30px;
				padding: 10px;
				background: #2f5d8c;
				border: 0px solid #152a40;
			}
			.options{
				position: relative;
				display: block;
				margin: 2px auto auto 0px;
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
			#backB{
				position: fixed;
				margin: auto auto auto 0px;
				float: right;
				right: 10px;
				bottom: 100px;
			}
			a{
				color: inherit;
				
			}
			#logout{
				margin-top: 5px;
			}
		</style>
        
    </head>
    <body>
	 <?php
		 //unset($_SESSION['userF']);
		 echo "<div id='logout' onclick=\"location.href='../logout.php';\">Log Out</div>";
	 ?>
	 <br/>
	 <h3>The list of members| Franklin SIFE<hr></h3>
	 <div class="options">
	 <?php
		 if(strlen($_SESSION['userF'])!=0){
			 echo "<a href='../excel/2011_01_30_members_list_excel.xlsx'>Download it as a Excell file</a>";
		 }
	 ?>
	</div>

    	 
	<div class="options" onClick="goBack()" id="backB">Back</div>
	<?php
		if(strlen($_SESSION['userF'])!=0){
			 //This is where everything starts to execute.
			$PrjList = new PrjListing;
			$PrjList->PrintEntireList();
		}
		
	?>
	 
    </body>
</html>