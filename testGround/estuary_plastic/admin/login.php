<?php
	require_once "../_php/services/sessionService.php";
	$sessionService = new SessionService;
	$errorMsg = '';

	if((!$sessionService->isUserLoggedIn()) && isset($_POST['userName']) && isset($_POST['password']))
	{
		$userName = $_POST['userName'];
		$password = $_POST['password'];
		
		require_once "../_php/services/loggingService.php";
		require_once "../_php/services/userLoginService.php";
		require_once "../_php/auth/auth_db.class.php";
		$userLogingService = new UserLoginService;		
		$loggingService = new LoggingService;
		$dbConnection = new AuthDb;

		$con = $dbConnection->GetDbConnection();
		$checkUserResult = $userLogingService->CheckUser($userName, $password, $con);

		if($checkUserResult)
		{
			$sessionService->SetCurrentUser($userName);			
			$loggingService->AddLogEntry($userName, "Logged In", $con);
			header("Location: index.php");
		}
		else
		{
			$errorMsg = "UserName/ Password combination wrong. Please try again.";
		}
		mysqli_close($con);
	}
	else
	{
		//header("Location: index.php");
	}
?>
<html>
	<head>
		<title>Estuary Polymer | Admin Login</title>
		<link rel="stylesheet" type="text/css" href="css/styles_admin_main.css">
	</head>
	<body>
		<header>
			<h2>Welcome To Estuary Polymer Admin Page</h2>
		</header>
		<section id="loginForm">
			<h2>Login</h2>
			<form id="loginForm" action="" method="POST">
				<input name="userName" type="text" placeholder="Username"/>
				<input name="password" type="password" placeholder="Password"/>
				<input name="loginButton" type="submit" value="Login"/>
			</form>
		</section>
		<p id="errorMsg">
			<?php echo $errorMsg; ?>
		</p>
	</body>
</html>