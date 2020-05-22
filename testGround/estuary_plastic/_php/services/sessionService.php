<?php
	class SessionService{
		/*
			Add variables that will be used throughout the App
		*/
		private $sessionCurrentUser;

		function __construct(){
			/*
				DO STUFF HERE
			*/
		}

		public function destroySession()
		{
			if(isset($_SESSION['sessionCurrentUser']))
				unset($_SESSION['sessionCurrentUser']);
			session_destroy();
		}

		public function isUserLoggedIn()
		{
			return isset($_SESSION['sessionCurrentUser']);
		}
		public function setCurrentUser($userName)
		{
			/*
				Destroy the existing session if it exists!
			*/
			$_SESSION['sessionCurrentUser'] = $userName;
		}
	}
?>