<?php
//Registering session variables to be used in the future.

//The login class.
class PrjListing{
	//Login authentication.
	function PrintEntireList(){	 
		
		//Importing the info list.
		$objDOM = new DOMDocument();
	  	$objDOM->load("../MEMBERS_LIST.xml");		
		$members = $objDOM->getElementsByTagName("MEMBER");			
		
		//Counter variable for debugging.
		//counter is set to [-2] because there are two power users who should not be counted when rendering.
		$d=-02;		
		
		//Reading the list.
		foreach($members AS $member)
		{
			$IDS = $member->getElementsByTagName("MEMID");
			$ID = $IDS->item(0)->nodeValue;

			$FNAMES = $member->getElementsByTagName("FNAME");
			$FNAME = $FNAMES->item(0)->nodeValue;
			
			$LNAMES = $member->getElementsByTagName("LNAME");
			$LNAME = $LNAMES->item(0)->nodeValue;

			$EMAILS = $member->getElementsByTagName("EMAIL");
			$EMAIL = $EMAILS->item(0)->nodeValue;

			$DATES = $member->getElementsByTagName("DATE");
			$DATE = $DATES->item(0)->nodeValue;
			

			
			//echo $FNAME. " ". $LNAME. " ". $EMAIL. " | ". $DATE. "<br/>\n";
			
			//Selecting the title entry.
			if(strcmp($FNAME, "First Name")==0){
				echo "<div id='srnd' style='height: 45px; line-height: 0px;'><h3>";
					echo "<div class='box' id='MEMID'>";
						echo "ID&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "</div>";

					echo "<div class='box' id='name'>";
						echo $FNAME. " ". $LNAME;
					echo "</div>";
				
					echo "<div class='box' id='date' style='margin-right: 8px'>";
						echo $DATE;
					echo "</div>";
				
					echo "<div class='box' id='email'>";
						echo $EMAIL;
					echo "</div>";
				
				echo "</h3></div>\n";
			}
			//Selecting the even entires.
			else if(($d%2)==0 && strcmp($FNAME, "Administrator")!=0 && strcmp($FNAME, "First Name")!=0){
				echo "<div id='srnd' style='background:#c7eefb; margin-top: 0px; color: #095a76'>";
					echo "<div class='box' id='MEMID'>";
						//if($d<10){
						//	echo "&nbsp;&nbsp;";
						//}
						echo $ID;
					echo "</div>";

					echo "<div class='box' id='name'>";
						echo $FNAME. " ". $LNAME;
					echo "</div>";

					echo "<div class='box' id='date'>";
						echo $DATE;
					echo "</div>";

					echo "<div class='box' id='email'>";
						echo $EMAIL;
					echo "</div>";
				echo "</div>\n";
			}
			//Selecting the odd entires.
			else if(($d%2)==1 && strcmp($FNAME, "Administrator")!=0 && strcmp($FNAME, "First Name")!=0){
				echo "<div id='srnd' style='background: #d7f2fc; margin-top: 0px; border: 0px solid #6698cc; color: #095a76'>";
					echo "<div class='box' id='MEMID'>";
						//if($d<10){
						//	echo "&nbsp;&nbsp;";
						//}
						echo $ID;
					echo "</div>";

					echo "<div class='box' id='name'>";
						echo $FNAME. " ". $LNAME;
					echo "</div>";

					echo "<div class='box' id='date'>";
						echo $DATE;
					echo "</div>";

					echo "<div class='box' id='email'>";
						echo $EMAIL;
					echo "</div>";
				echo "</div>\n";
			}
			//if($d!=47){
				$d++;
			//}
			
		}
		echo "<div style='background: #d7f2fc; width: auto; height: 70px; padding: 5px 0px 5px 5px; border-top: 1px solid #a8e4f8; margin-top: 10px'>";
		echo "<h3 style='color: gray'>The count: ". --$d. "</h3>";
		echo "<x style='color: gray;'>Last update: May-17-2011</x>";
		echo "</div>";
	}	
}
?>
