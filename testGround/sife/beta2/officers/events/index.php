<?php
	include("events_listing.php");	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Project Creation Page</title>
		
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="../style.css">
		<script type='text/javascript' src='../script_general.js'></script>
	</head>
	<body>
		<div class="options" onClick="location.href='../index.php'" id="backB">Main Control Panel</div>
		<div class="container" style="position: relative; width: 600px; margin: auto auto auto auto">
			<h3>Projects Page</h3>
			<hr>
			
			<?php
				//This is where everything starts to execute.
				$EventList = new eventsListing;
				$EventList->PrintEventsList();
			?>

		</div>
	<body>
</html>