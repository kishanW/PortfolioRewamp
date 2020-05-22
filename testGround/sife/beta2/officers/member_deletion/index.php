<?php
	include("events_listing_sorted_LIFO.php");	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Franklin SIFE | Projects</title>
        <link rel="stylesheet" type="text/css" href="../../../style.css">
        <link rel="stylesheet" type="text/css" href="../../../style_menu.css">
	 <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="SHORTCUT ICON" href="../images/favicon.gif"/>
        <style type="text/css">
		a{
			color: inherit;
		}
		a:hover{
			color:white;
		}
		.post {
			width: auto;
		}
		
		#main_image {
			background: url(../images/2010_07_7_5.png) no-repeat;
		}
		
		.event {
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
		}
		
		.event hr {
			background: #B8B8B3;
			color: #B8B8B3;
		}
		#moreinfo_prj {
			    position: relative;
				float: left;
			    display: block;
			    margin: 5px 0px auto auto;
			    width: 120px;
			    height: 10px;
			    padding: 5px 5px;
			    border: 1px solid #dbe2e7;
			    background: white;
			    line-height: 10px;
			    text-align: center;
			    color: black;
		}
		.project{
			margin: auto auto;
			width: 350px;
		}	
		#moreinfo_prj:hover {
			background: #1f272e;
			color: white;
			border: 1px solid transparent;
			cursor:pointer;
		}

        </style>
    </head>
    <body>
        <div class="container">
            <a href="../index.htm">
                <div id="logo">
                </div>
            </a>
            <a href="../index.htm">
                <div id="header">
                </div>
            </a>
            

		<?php
			//This is where everything starts to execute.
			$EventList = new eventsListing;
			$EventList->createDeleteList();
		?>
		
        </div><!--container_finished-->
    </body>
</html>