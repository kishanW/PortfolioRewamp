<?php
	$name=strip_tags($_POST["name"]);
	$email=strip_tags($_POST["email"]);
	$subject=strip_tags($_POST["subject"]);
	$message=strip_tags($_POST["message"]);
	
	class Comments{
		
		function addComment(){
			global $name, $email, $subject, $message;
			$today=date("d-M-y");
			include_once("auth.php");
			$authObj = new auth();
			mysql_connect($authObj->getDbLoc(),$authObj->getUname(),$authObj->getPass());
			@mysql_select_db($authObj->getDb()) or die( "Unable to select database");
			//Adding
			$inPassString="INSERT INTO `comments` ( `id` , `name` , `email` , `subject` , `message` , `dt`) 
				VALUES ('', '". $name. "', '". $email. "', '". $subject. "', '". $message. "', '". $today. "')";
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
				$cS= "<div class='cmnt' onclick='cmntheadplus(this.id)'><div id='cmntMore'></div><div id='cmntHeader'>";					
				$cE="</div>";
				
				$test=$test. $cS. $row['dt']. " | ". $row['name']. "</div><div id='cmntBody'>". $row['message']. "<br> - ". $row['name']."</div></div>";				
			}
			mysql_close();
			echo '{"message":"'. $test. '"}';
		}
		
	}
	$cmn = new Comments();	
	$cmn->addComment();
	$cmn->getComment();
?>
			