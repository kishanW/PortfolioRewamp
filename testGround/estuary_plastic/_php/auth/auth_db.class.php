<?php
	class AuthDb{
		private $db_user;
		private $db_pswd;
		private $db_host;
		private $db_name;

		function __construct()
		{
			$this->db_user = "dbo501995334";
			$this->db_pswd = "P@ssw0rd";
			$this->db_host = "db501995334.db.1and1.com";
			$this->db_name = "db501995334";
		}

		public function GetDbConnection()
		{
			$dbConnect = mysqli_connect($this->db_host, $this->db_user, $this->db_pswd, $this->db_name);
			if(!$dbConnect)
			{
				die('Error Connecting To DB.');
			}
			return $dbConnect;
		}
	}
?>