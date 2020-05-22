<?php
	include("projects_listing.php");	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Project Creation Page</title>
		
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container" style="position: relative; width: 600px; margin: auto auto auto auto">
			<h3>Projects Page</h3>
			<hr>
			
			<?php
				//This is where everything starts to execute.
				$PrjList = new PrjListing;
				$PrjList->PrintList();
			?>

		</div>
	<body>
</html>