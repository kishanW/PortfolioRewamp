<?php
	session_register("userF");
	//$_SESSION['userF']="";
	unset($_SESSION['userF']);
	session_destroy();

	print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
?>