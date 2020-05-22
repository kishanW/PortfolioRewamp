<?php
	class LoggingService{
		public function AddLogEntry($userName, $activity, $con)
		{	
			$query = "INSERT INTO log VALUES (NULL, NULL, '$userName', '$activity')";
			mysqli_query($con, $query);
		}	
	}
?>