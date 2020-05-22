<?php
	session_register("userF");
	session_register("userL");
	session_register("userEmail");
class emailSystem{

	public static $parties=""; 
	public static $mailType="";	
	public static $message="";
	public static $d="";
	public static $Email_To="";
	public static $Subject="";
	public static $sender_name="";


	function saveVars(){
		self::$parties = Trim(stripslashes($_POST['parties'])); 
		self::$message = Trim(stripslashes($_POST['message']));
		
		//self::$EmailFrom = "info@franklinSIFE.org";

		self::$Subject = Trim(stripslashes($_POST['subject']));
		self::$sender_name = $_SESSION['userF']. " ". $_SESSION['userL']. "<". $_SESSION['userEmail']. ">";
	}
	

	//Get email addresses
	function getEmails($statusType){
		
		// prepare email body text
		$Body = "";
		$Body .= "From: " ;
		$Body .= self::$sender_name;
		$Body .= "\n";

		$EmailFrom = "info@franklinsife.org";

		$tempEmail="";
		
		$objDOM = new DOMDocument();
	  	$objDOM->load("../MEMBERS_LIST.xml");		
		$members = $objDOM->getElementsByTagName("MEMBER");			
		
		foreach($members AS $member)
		{
			$statuses = $member->getElementsByTagName("STATUS");
			$status = $statuses->item(0)->nodeValue;


			if ($status===$statusType)
			{
				self::$d++;
				$emailes = $member->getElementsByTagName("EMAIL");
				$email = $emailes->item(0)->nodeValue;

				$memberFNames = $member->getElementsByTagName("FNAME");
				$memberFName = $memberFNames->item(0)->nodeValue;
				
				$Body .= "Hi ". $memberFName. ",\n";
	
				$Body .= "\n";
				$Body .= self::$message;
				$Body .= "\n";

				$EmailTo=$email;

				// Confirmation setup.
				if (strlen($tempEmail)==0){
					$tempEmail=$EmailTo;
				}
				elseif(strlen($tempEmail)>0){
					$tempEmail.=", ". $EmailTo;
				}
				
				// send email 
				$success = mail($EmailTo, self::$Subject, $Body, "From: <$EmailFrom>");
				// redirect to success page 
				//print $success;
				if ($success){
			  		echo "<br> Result: Good | Email: ". $EmailTo;
					$Body = "";
					print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.php\">";
				}
				else{
					echo "<br>Result: Bad&nbsp; | Email: ". $EmailTo;
	  				//print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
				}
				
			}
		}
		self::$Email_To.="<br>". $tempEmail. "<br>";		
	}
	
	function pickStatus(){
		
		if(strlen(self::$parties)>1){
			$emailParties = explode(" ", self::$parties);
			$arrayCount = count($emailParties);
			
				if(in_array("M", $emailParties)){
					$statusType="M";
					self::getEmails($statusType);
				}
				if(in_array("O", $emailParties)){
					$statusType="O";
					self::getEmails($statusType);
				}
				if(in_array("A", $emailParties)){
					$statusType="A";
					self::getEmails($statusType);
				}
			echo "<br>Addreses picked: ". self::$d. "<br>EmailTo: ". self::$Email_To;
			echo "<br>Parties: ". self::$parties. " | Type: array |count: ". count($emailParties). " | status ". $statusType. " | Message: ". self::$message;
		}
		else{
			
			if(strcmp(self::$parties, "M")==0){
				$statusType="M";
				self::getEmails($statusType);
			}
			elseif(strcmp(self::$parties, "O")==0){
				$statusType="O";
				self::getEmails($statusType);
			}
			elseif(strcmp(self::$parties, "A")==0){
				$statusType="A";
				self::getEmails($statusType);
			}
			echo "<br>Addreses picked: ". self::$d. "<br>EmailTo: ". self::$Email_To;
			echo "<br>Parties: ". self::$parties. " | Type: var |Status: ". $statusType. " | Message: ". self::$message;
		}
	}
	//echo "Sending emails completed.\n";

}

$emailSystemClass = new emailSystem;
$emailSystemClass->saveVars();
$emailSystemClass->pickStatus();


?>
