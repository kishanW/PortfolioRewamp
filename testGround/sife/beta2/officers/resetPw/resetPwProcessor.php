<?php
//Registering session variables to be used in the future.
session_register("pwRest_oldPw");
session_register("pwRest_newPw1");
session_register("userF");
session_register("userL");

//Global variables
$array_members="";
$oldPw="";
$newPw="";

class resetPw{
	
	function saveVars(){
		global $oldPw;
		global $newPw;
		$oldPw = Trim(stripslashes($_POST['pwRest_oldPw']));
		$newPw = Trim(stripslashes($_POST['pwRest_newPw1']));
		
		//confirmation after saving the variables.
		//echo $oldPw. " ". $newPw; 
	}

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
		//$event_id_count=$d+1;
		//echo $prj_id_count;
	}

	//Check and see if the password was changed.
	function arrayCheck(){
		global $array_members;
		for ($counter=0; $counter<count($array_members);$counter++)
		echo "<br>". $array_members[$counter]->getElementsByTagName("PW")->item(0)->nodeValue;
	}

	//This will delete the old log.
	function deleteLog(){
		if(is_file("../officers/MEMBERS_LIST.xml")){
			unlink("../officers/MEMBERS_LIST.xml");
		}
	}
	
	//This will write the data to a newly created log.
	function writeLog(){
		//$this->deleteLog();
		$File = "../MEMBERS_LIST.xml"; 
		$Handle = fopen($File, 'w');

		//Starting to write data.
		global $array_members;

		fwrite($Handle, "<?xml version=\"1.0\" encoding=\"UTF-8\"?>");

		fwrite($Handle, "\n<MEMBERS>\n");
		for ($counter=0; $counter<count($array_members);$counter++){
			//Saving all the required vars to be written.
			$MMID=$array_members[$counter]->getElementsByTagName("MEMID")->item(0)->nodeValue;
			$MMFN=$array_members[$counter]->getElementsByTagName("FNAME")->item(0)->nodeValue;
			$MMLN=$array_members[$counter]->getElementsByTagName("LNAME")->item(0)->nodeValue;
			$MMEM=$array_members[$counter]->getElementsByTagName("EMAIL")->item(0)->nodeValue;
			$MMDT=$array_members[$counter]->getElementsByTagName("DATE")->item(0)->nodeValue;
			$MMST=$array_members[$counter]->getElementsByTagName("STATUS")->item(0)->nodeValue;
			$MMPW=$array_members[$counter]->getElementsByTagName("PW")->item(0)->nodeValue;
			$MMUN=$array_members[$counter]->getElementsByTagName("UN")->item(0)->nodeValue;

			fwrite($Handle, "\n<MEMBER>");

				//ID
				fwrite($Handle, "\n<MEMID>". $MMID. "</MEMID>");
				
				//FNAME
				fwrite($Handle, "\n<FNAME>". $MMFN. "</FNAME>");

				//LNAME
				fwrite($Handle, "\n<LNAME>". $MMLN. "</LNAME>");

				//EMAIL
				fwrite($Handle, "\n<EMAIL>". $MMEM. "</EMAIL>");
				
				//DATE
				fwrite($Handle, "\n<DATE>". $MMDT. "</DATE>");

				//STATUS
				fwrite($Handle, "\n<STATUS>". $MMST. "</STATUS>");

				//PASSWORD
				fwrite($Handle, "\n<PW>". $MMPW. "</PW>");

				//USER NAME
				fwrite($Handle, "\n<UN>". $MMUN. "</UN>");

			fwrite($Handle, "\n</MEMBER>\n");
		}
		fwrite($Handle, "\n</MEMBERS>\n");
	}

	//This is the main thread/	
	function resetPwStarter(){
		$validator=false;

		$this->saveVars();
		$this->read_file();
		
		//ACTIVATING GLOBAL VARIABLES FOR USE.
		global $oldPw;
		global $newPw;
		global $array_members;

		for($counter=0; $counter<count($array_members);$counter++){

			$CURRENTPWS = $array_members[$counter]->getElementsByTagName("PW");
			$CURRENTPW = $CURRENTPWS->item(0)->nodeValue;

			$LNAMES = $array_members[$counter]->getElementsByTagName("LNAME");
			$LNAME = $LNAMES->item(0)->nodeValue;

			if($_SESSION['userL']==$LNAME && $oldPw==$CURRENTPW){
				echo "<br><b>Passed!</b><hr>";
				$array_members[$counter]->getElementsByTagName("PW")->item(0)->nodeValue=$newPw;
				//echo $array_members[$counter]->getElementsByTagName("PW")->item(0)->nodeValue;
				$validator=true;
			}
			else{
				//$validator=false;
			}
			$this->writeLog();
		}

		//This will validate and see if after the final iteration inside the list, did it change or not.
		if($validator==false){
			echo "<br><b>Failed!</b><hr>";
			print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
		}
		else{
			print "<meta http-equiv=\"refresh\" content=\"0;URL=../index.php\">";
		}
		
		//Initiate the function to check and see if the the password was changed.
		//$this->arrayCheck();
	}
}
$resetter = new resetPw();
$resetter->resetPwStarter();
?>