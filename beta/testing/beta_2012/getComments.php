<?php
	//Initial comments call
		function getComments(){
			include_once("auth.php");
			$authObj = new auth();
			mysql_connect($authObj->getDbLoc(),$authObj->getUname(),$authObj->getPass());
			@mysql_select_db($authObj->getDb()) or die( "Unable to select database");
			//Getting
			$inPassString="SELECT * FROM w12waniga01.comments order by ID desc LIMIT 0, 1000 ";
			$result=mysql_query($inPassString);
			$test="";
			while($row=mysql_fetch_array($result)){
				$cS= "<div class='cmnt' id='x". $row['id']. "' onclick='cmntheadplus(this.id)'><div id='cmntMore'></div><div id='cmntHeader'>";					
				$cE="</div>";				
				$test=$test. $cS. $row['dt']. " | ". $row['name']. "</div><div id='cmntBody'>". $row['message']. "</div></div>\n";
			}
			mysql_close();
			echo $test;
		}
		getComments();
?>