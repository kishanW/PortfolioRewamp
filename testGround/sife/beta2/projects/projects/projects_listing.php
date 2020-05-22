<?php
//Registering session variables to be used in the future.

//The login class.
class PrjListing{
	//Login authentication.
	function PrintList(){	 
		
		//Importing the info list.
		$objDOM = new DOMDocument();
	  	$objDOM->load("project_doc.xml");		
		$projects = $objDOM->getElementsByTagName("PROJECT");			
		
		//Counter variable for debugging.
		$d;		
		
		//Reading the list.
		foreach($projects AS $project)
		{
			$IDs = $project->getElementsByTagName("ID");
			$ID = $IDs->item(0)->nodeValue;
			
			$NAMEs = $project->getElementsByTagName("NAME");
			$NAME = $NAMEs->item(0)->nodeValue;

			$OWNERs = $project->getElementsByTagName("OWNER");
			$OWNER = $OWNERs->item(0)->nodeValue;

			$SUMMARYs = $project->getElementsByTagName("SUMMARY");
			$SUMMARY = $SUMMARYs->item(0)->nodeValue;

			$DESCs = $project->getElementsByTagName("DESC");
			$DESC = $DESCs->item(0)->nodeValue;

			$d++;
			echo "<div class=\"project\">\n";
				echo "<div class=\"project_head\"> \n";
					echo $ID. " | ". $NAME. "\n";
				echo "</div>\n";

				echo "<div class=\"project_body\"> \n";
					echo "Owner: ". $OWNER. "<BR/>\n";
					echo "Summary: ". $SUMMARY. "<BR/>\n";
					echo "Desc: ". $DESC. "<BR/>\n";
				echo "</div>\n";
			echo "</div>\n";
		}
		//echo "The count: ". $d;

		//Print the counter to see how many users were read from the list for debugging purposes.
		//echo $d-1;	
	}	
}
?>
