<?php
//Registering session variables to be used in the future.

//Global variables
$array_events="";

class eventsListing{

	function read_file(){
		//Importing the info list.
		$objDOM = new DOMDocument();
	  	$objDOM->load("../officers/events/event_doc.xml");		
		$events = $objDOM->getElementsByTagName("EVENT");			
		$d=0;
		global $array_events;
		$array_events=array();		
		//Reading the list.
		foreach($events AS $event)
		{
			$array_events[$d]=$event;
			$d=$d+1;
		}
		//Confirm that the count was taken.
		//global $event_id_count;
		//$event_id_count=$d+1;
		//echo $prj_id_count;
	}
	
	function PrintEventsList(){
		$this->read_file();
		global $array_events;
		$event_count=count($array_events)-1;
		for($counter=$event_count; $counter>=0;$counter--){
			$TITLES = $array_events[$counter]->getElementsByTagName("TITLE");
			$TITLE = $TITLES->item(0)->nodeValue;
			
			$DATES = $array_events[$counter]->getElementsByTagName("DATE");
			$DATE = $DATES->item(0)->nodeValue;

			$DESCS = $array_events[$counter]->getElementsByTagName("DESC");
			$DESC = $DESCS->item(0)->nodeValue;

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
			echo "</div>\n";		
		}
	}
}