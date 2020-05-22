<?php
//Registering session variables to be used in the future.
session_register("userF");
session_register("userL");
session_register("userEmail");

//The login class.
class login{
	//Login authentication.
	function loginAuth(){
		$username=Trim(stripslashes($_POST['username'])); 
		$pww=Trim(stripslashes($_POST['password'])); 
		
		//Importing the info list.
		$objDOM = new DOMDocument();
	  	$objDOM->load("MEMBERS_LIST.xml");		
		$members = $objDOM->getElementsByTagName("MEMBER");			
		
		//Counter variable for debugging.
		$d;
		//The confirmation variable to see if the login operation is successful.
		//Default this is set to empty. If login succeeded this is set to '1'. If failed this will be set to '0'.
		$loginresult="";
		
		//Reading the list.
		foreach($members AS $member)
		{
			$UNames = $member->getElementsByTagName("UN");
			$UName = $UNames->item(0)->nodeValue;
			$d++;
			$PWs = $member->getElementsByTagName("PW");
			$PW = $PWs->item(0)->nodeValue;

			$PostNamesF = $member->getElementsByTagName("FNAME");
			$PostNameF = $PostNamesF->item(0)->nodeValue;

			$PostNamesL = $member->getElementsByTagName("LNAME");
			$PostNameL = $PostNamesL->item(0)->nodeValue;
			
			$PostEmails = $member->getElementsByTagName("EMAIL");
			$PostEmail = $PostEmails->item(0)->nodeValue;

			//Validating the input information with the list.
			if (strcmp($UName, $username)==0 && strlen($username)!=0 && strcmp($PW, $pww)==0 && strlen($pww)!=0)
			{
				$loginresult=1;
				//Print the user name if needed for debugging purpose.
				//echo $UName. "<br>Result: Success";
				$_SESSION['userF']=$PostNameF;
				$_SESSION['userL']=$PostNameL;
				$_SESSION['userEmail']=$PostEmail;
				print "<meta http-equiv=\"refresh\" content=\"0;URL=main_opts.php\">";
				break;
			}
			else{
				$loginresult=0;
				print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
				//Print the user name if needed for debugging purpose.
				//echo $UName. "<br>Result: Failed";
				
			}
		}
		//Validating the final login results. This can be utilized for debugging purposes.
		if($loginresult==1)
		{
			echo "<br>redirect";
			echo "<br>". date("Y/m/d") . "<br>";
			
		}
		else{
			echo "<br>Failed";
			echo "<br>". date("Y/m/d") . "<br>";
		}
		//Print the counter to see how many users were read from the list for debugging purposes.
		//echo $d-1;	
	}	
}

//This is where everything starts to execute.
$logIn = new login;
$logIn->loginAuth();


?>
