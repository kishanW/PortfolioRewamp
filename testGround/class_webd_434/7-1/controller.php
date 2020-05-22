<?php
	$name=$_POST["name"];
	$email=$_POST["email"];
	$subject=$_POST["subject"];
	$message=$_POST["message"];
	
	class Comments{
		
		function saveVars(){
			global $name, $email, $subject, $message;
			
		}
		
		function addComment(){
			global $name, $email, $subject, $message;
			include_once("auth.php");
			$authObj = new auth();
			mysql_connect($authObj->getDbLoc(),$authObj->getUname(),$authObj->getPass());
			@mysql_select_db($authObj->getDb()) or die( "Unable to select database");
			//Adding
			$inPassString="INSERT INTO `comments` ( `id` , `name` , `email` , `subject` , `message` , `dt`) 
				VALUES ('', '". $name. "', '". $email. "', '". $subject. "', '". $message. "', '')";
			mysql_query($inPassString);
			mysql_close();
		}
		
		function getComment(){
			include_once("auth.php");
			$authObj = new auth();
			mysql_connect($authObj->getDbLoc(),$authObj->getUname(),$authObj->getPass());
			@mysql_select_db($authObj->getDb()) or die( "Unable to select database");
			//Getting
			$inPassString="SELECT * FROM w12waniga01.comments LIMIT 0, 1000";
			$result=mysql_query($inPassString);
			$test="";
			while($row=mysql_fetch_array($result)){
				$cS= "<div class='cmnt' id='c2'>";					
				$cE="</div>";
				$test=$test. $cS. $row['subject']. "<hr>". $row['message']. "<br> - ". $row['name']."</div>";
			}
			mysql_close();
			echo '{"message":"'. $test. '"}';
		}
	}
	$cmn = new Comments();	
	$cmn->addComment();
	$cmn->getComment();
?>
			