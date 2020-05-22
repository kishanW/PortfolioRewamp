<?php
//Registering session variables to be used in the future.

//The login class.
class eventsListing{
	//Login authentication.
	function PrintEventsList(){	 
		
		//Importing the info list.
		$objDOM = new DOMDocument();
	  	$objDOM->load("../officers/events/event_doc.xml");		
		$events = $objDOM->getElementsByTagName("EVENT");			
		
		//Counter variable for debugging.
		$d;		
		
		//Reading the list.
		foreach($events AS $event)
		{
			$TITLES = $event->getElementsByTagName("TITLE");
			$TITLE = $TITLES->item(0)->nodeValue;

			$DATES = $event->getElementsByTagName("DATE");
			$DATE = $DATES->item(0)->nodeValue;

			$DESCS = $event->getElementsByTagName("DESC");
			$DESC = $DESCS->item(0)->nodeValue;

			$d++;
			echo "<div class=\"project\">\n";
				echo "<div class=\"project_head\"> \n";
					echo $TITLE. "\n";
				echo "</div>\n";

				echo "<div id=\"project_body\"> \n";

					echo "<div id=\"project_labels\"> \n";
						echo "	Date <hr> \n";
						echo "	Description \n";
					echo "</div> \n";

					echo "<div id=\"project_label_details\"> \n";
						echo 	$DATE. "<hr> \n";
						echo 	$DESC. " \n";
					echo "</div> \n";

				echo "</div>\n";
			echo "</div>\n";		}
		//echo "The count: ". $d;

		//Print the counter to see how many users were read from the list for debugging purposes.
		//echo $d-1;	
	}	
}
?>
