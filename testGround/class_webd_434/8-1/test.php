<?php
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
				$test=$test. "<div class='cmnt' id='c2'>". $row['name']. "</div>";
			}
			mysql_close();
			echo '{"message":"'. $test. '"}';
		}
	getComment();
?>