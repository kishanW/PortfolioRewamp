<?php
//Registering Session Variables
session_register("userF");
session_register("userL");

//Setting up variables.
$prj_nme="";
$prj_smry="";
$prj_dsc="";
$prj_ownr="";
$prj_id_count=0;
//The start of the project creation class
class create_prj{		
	function read_file(){
		//Importing the info list.
		$objDOM = new DOMDocument();
	  	$objDOM->load("project_doc.xml");		
		$projects = $objDOM->getElementsByTagName("PROJECT");			
		$d=0;		
		//Reading the list.
		foreach($projects AS $project)
		{
			$d=$d+1;
		}
		//Confirm that the count was taken.
		global $prj_id_count;
		$prj_id_count=$d+1;
		//echo $prj_id_count;
	}

	//Documenting the new project in the log.
	function document_prj(){
		$this->read_file();
		global $prj_id_count;

		$prj_nme=Trim(stripslashes($_POST['prj_name'])); 
		$prj_smry=Trim(stripslashes($_POST['prj_summary']));
		$prj_dsc=Trim(stripslashes($_POST['prj_desc'])); 
		$prj_ownr=Trim(stripslashes($_POST['prj_owner']));
		
		// Load the data and delete the line from the array.
		$lines = file('project_doc.xml'); 
		$last = sizeof($lines) - 1 ; 
		unset($lines[$last]);
		
		// Re-write the data to the file 
		$fp = fopen('project_doc.xml', 'w'); 
		fwrite($fp, implode('', $lines)); 
		fclose($fp);
		
		//This will write the data now.
		$File = "project_doc.xml"; 
		$Handle = fopen($File, 'a');

		fwrite($Handle, "\n<PROJECT>\n");
		fwrite($Handle, "<ID>\n"); 
		fwrite($Handle, $prj_id_count);
		fwrite($Handle, "\n</ID>\n");
		
		fwrite($Handle, "<NAME>\n"); 
		fwrite($Handle, $prj_nme);
		fwrite($Handle, "\n</NAME>\n");

		fwrite($Handle, "<OWNER>\n"); 
		fwrite($Handle, $prj_ownr);
		fwrite($Handle, "\n</OWNER>\n");

		fwrite($Handle, "<SUMMARY>\n"); 
		fwrite($Handle, $prj_smry);
		fwrite($Handle, "\n</SUMMARY>\n");
		
		fwrite($Handle, "<DESC>\n"); 
		fwrite($Handle, $prj_dsc);
		fwrite($Handle, "\n</DESC>\n");

		fwrite($Handle, "</PROJECT>\n"); 
		fwrite($Handle, "\n</PROJECTS>"); 
		fclose($Handle); 
		echo 	$prj_nme. " ". $prj_smry. " ". $prj_dsc. " ". $prj_ownr. " Id count: ". $prj_id_count;

		//REDIRECT TO THE LISTING
		print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
	}	
}
$project = new create_prj();
//$project->read_file();
$project->document_prj();
?>