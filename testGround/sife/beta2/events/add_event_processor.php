<?php
//Registering Session Variables
session_register("userF");
session_register("userL");

//Setting up variables.
$event_nme="";
$event_smry="";
$event_dsc="";
//$event_ownr="";
$event_id_count=0;

//The start of the project creation class
class event_prj{		
	function read_file(){
		//Importing the info list.
		$objDOM = new DOMDocument();
	  	$objDOM->load("event_doc.xml");		
		$events = $objDOM->getElementsByTagName("EVENT");			
		$d=0;		
		//Reading the list.
		foreach($events AS $event)
		{
			$d=$d+1;
		}
		//Confirm that the count was taken.
		global $event_id_count;
		$event_id_count=$d+1;
		//echo $prj_id_count;
	}

	//Documenting the new project in the log.
	function document_event(){
		$this->read_file();
		global $event_id_count;

		$prj_nme=Trim(stripslashes($_POST['event_name'])); 
		$prj_smry=Trim(stripslashes($_POST['event_summary']));
		$prj_dsc=Trim(stripslashes($_POST['event_desc'])); 
		//$prj_ownr=Trim(stripslashes($_POST['event_owner']));
		
		// Load the data and delete the line from the array.
		$lines = file('event_doc.xml'); 
		$last = sizeof($lines) - 1 ; 
		unset($lines[$last]);
		
		// Re-write the data to the file 
		$fp = fopen('event_doc.xml', 'w'); 
		fwrite($fp, implode('', $lines)); 
		fclose($fp);
		
		//This will write the data now.
		$File = "event_doc.xml"; 
		$Handle = fopen($File, 'a');

		fwrite($Handle, "\n<EVENT>\n");
		fwrite($Handle, "<ID>\n"); 
		fwrite($Handle, $prj_id_count);
		fwrite($Handle, "\n</ID>\n");
		
		fwrite($Handle, "<TITLE>\n"); 
		fwrite($Handle, $prj_nme);
		fwrite($Handle, "\n</TITLE>\n");

		//fwrite($Handle, "<OWNER>\n"); 
		//fwrite($Handle, $prj_ownr);
		//fwrite($Handle, "\n</OWNER>\n");

		fwrite($Handle, "<DATE>\n"); 
		fwrite($Handle, $prj_smry);
		fwrite($Handle, "\n</DATE>\n");
		
		fwrite($Handle, "<DESC>\n"); 
		fwrite($Handle, $prj_dsc);
		fwrite($Handle, "\n</DESC>\n");

		fwrite($Handle, "</EVENT>\n"); 
		fwrite($Handle, "\n</EVENTS>"); 
		fclose($Handle); 
		echo 	$event_nme. " ". $event_smry. " ". $event_dsc. " ". $event_ownr. " Id count: ". $event_id_count;

		//REDIRECT TO THE LISTING
		print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
	}	
}
$event = new event_prj();
//$project->read_file();
$event->document_event();
?>