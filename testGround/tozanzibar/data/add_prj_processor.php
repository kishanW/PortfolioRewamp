<?php

//Setting up variables.
$itemName="";
$itemPrice="";
$itemDesc="";
$itemIdCount=0;

//The start of the project creation class
class create_prj{		
	function read_file(){
		//Importing the info list.
		$objDOM = new DOMDocument();
	  	$objDOM->load("itemListx.xml");
		$projects = $objDOM->getElementsByTagName("ITEM");
		$d=0;		
		//Reading the list.
		foreach($items AS $item)
		{
			$d=$d+1;
		}
		//Confirm that the count was taken.
		global $prj_id_count;
		$itemIdCount=$d+1;
		//echo $prj_id_count;
	}

	//Documenting the new project in the log.
	function document_prj(){
		$this->read_file();
		global $itemIdCount;

		$prj_nme=Trim(stripslashes($_POST['item_name'])); 
		$prj_smry=Trim(stripslashes($_POST['item_price']));
		$prj_dsc=Trim(stripslashes($_POST['item_desc'])); 
		
		// Load the data and delete the line from the array.
		$lines = file('itemList.xml'); 
		$last = sizeof($lines) - 1 ; 
		unset($lines[$last]);
		
		// Re-write the data to the file 
		$fp = fopen('itemlist.xml', 'w'); 
		fwrite($fp, implode('', $lines)); 
		fclose($fp);
		
		//This will write the data now.
		$File = "itemList.xml"; 
		$Handle = fopen($File, 'a');

		fwrite($Handle, "\n<ITEM>\n");
		fwrite($Handle, "<ID>"); 
		fwrite($Handle, $itemListCount);
		fwrite($Handle, "</ID>\n");
		
		fwrite($Handle, "<NAME>\n"); 
		fwrite($Handle, $itemName);
		fwrite($Handle, "\n</NAME>\n");

		fwrite($Handle, "<PRICE>\n"); 
		fwrite($Handle, $itemPrice);
		fwrite($Handle, "\n</PRICE>\n");

		fwrite($Handle, "<DESC>\n"); 
		fwrite($Handle, $itemDesc);
		fwrite($Handle, "\n</DESC>\n");

		fwrite($Handle, "</ITEM>\n"); 
		fwrite($Handle, "\n</ITEMS>"); 
		fclose($Handle); 

		//REDIRECT TO THE LISTING
		print "<meta http-equiv=\"refresh\" content=\"0;URL=add_project.php\">";
	}	
}
$project = new create_prj();
//$project->read_file();
$project->document_prj();
?>