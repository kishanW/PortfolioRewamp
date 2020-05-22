<?php
//Registering session variables to be used in the future.


//Global variables
$array_members="";

//This where the class starts.
class delete_member_processor{
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
			//echo $d. "<br>";
			$d=$d+1;			
		}
		//Confirm that the count was taken.
		//global $event_id_count;
		//$event_id_count=$d+1;
		//echo $prj_id_count;
	}
	
	function deleteMembers(){
		$this->read_file();
		global $array_members;
		echo "Before deletion: ". count($array_members). "<hr>";
		for($counter=0; $counter<count($array_members);$counter++){

			if(isset($_POST[$counter])){
				echo "<br>". $counter. ": delete ready.";
				unset($array_members[$counter]);
				echo "deleted<br>";
				echo "- ". count($array_members);
			}
			else{
				//echo $counter. ": not ready for deletion</br>\n";
			}
		}
		
	}	
}
echo "We're here!";
$DelMembers = new delete_member_processor;
$DelMembers->deleteMembers();
?>
