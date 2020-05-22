<?php
//Registering session variables to be used in the future.

//Global variables
$array_members="";

class eventsListing{

	function read_file(){
		//Importing the info list.
		$objDOM = new DOMDocument();
	  	$objDOM->load("../MEMBERS_LIST.xml");		
		$members = $objDOM->getElementsByTagName("MEMBER");			
		$d=0;
		global $array_members;
		$array_members=array();		
		//Reading the list.
		foreach($members AS $member)
		{
			$array_members[$d]=$member;
			$d=$d+1;
		}
		//Confirm that the count was taken.
		global $event_id_count;
		$event_id_count=$d+1;
		//echo $prj_id_count;
	}
	
	//This wil create the list of members as a list.
//	function createDeleteList(){
		
//	}
	
	//This will print the list of members.
	function createDeleteList(){
		$this->read_file();
		global $array_members;
		for($counter=0; $counter<count($array_members);$counter++){
			$FNAMES = $array_members[$counter]->getElementsByTagName("FNAME");
			$FNAME = $FNAMES->item(0)->nodeValue;
			
			$LNAMES = $array_members[$counter]->getElementsByTagName("LNAME");
			$LNAME = $LNAMES->item(0)->nodeValue;

			$EMAILS = $array_members[$counter]->getElementsByTagName("EMAIL");
			$EMAIL = $EMAILS->item(0)->nodeValue;
			
			$DATES = $array_members[$counter]->getElementsByTagName("DATE");
			$DATE = $DATES->item(0)->nodeValue;

			echo "<form name=\"member_delete_form\" action=\"delete_member_processor.php\" method=\"post\">";
			echo "<div class=\"project\">\n";
				echo "<div class=\"project_head\"> \n";
					echo $FNAME. " ". $LNAME. "<input style=\"float:right;\" type=\"checkbox\" name=\"". $counter. "\" id=\"". $counter. "\" value=\"". $counter. "\">\n";
				echo "</div>\n";

				echo "<div id=\"project_body\"> \n";

					echo "<div id=\"project_labels\"> \n";
						echo "	Date <hr> \n";
						echo "	Email \n";
					echo "</div> \n";

					echo "<div id=\"project_label_details\"> \n";
						echo 	$DATE. "<hr> \n";
						echo 	$EMAIL. " \n";
					echo "</div> \n";

				echo "</div>\n";
			echo "</div>\n";		
		}
		echo "<input type='submit' name='submit' class='button' id ='buttons' value='delete' style='position: fixed;bottom:10px; right:10px;'>";
		echo "</form>";
	}
}