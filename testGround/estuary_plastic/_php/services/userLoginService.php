<?php
	class UserLoginService{
		public function CheckUser($userName, $password, $con)
		{
			$hashedPw = md5($password);
			$query = "SELECT * FROM adminusers WHERE UserName ='". $userName. "' and Password='". $hashedPw. "'";
			$result = mysqli_query($con, $query);

			if(mysqli_num_rows($result) == 1)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
?>