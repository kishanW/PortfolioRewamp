<?php
	$postdate = $_POST['postdate'];
	$blogpost = $_POST['blogpost'];

	//Connecting to DB
	$con = mysql_connect("db439114275.db.1and1.com","dbo439114275","atox-d1109");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("db439114275", $con);

	$comment = "INSERT INTO comments
			(ID, POSTDATE, COMMENT)
			VALUES
			('',
			'$postdate',
			'$blogpost')";
	$result = mysql_query($comment);
	header( "refresh:1;url=index.htm" );
	if($result){
		echo("<br>Input data is succeed");
	} else{
		echo("<br>Input data is fail");
	}
?>