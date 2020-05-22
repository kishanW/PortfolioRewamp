<?php
	$con = mysql_connect("db439114275.db.1and1.com","dbo439114275","atox-d1109");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("db439114275", $con);
	$result = mysql_query("SELECT * FROM comments ORDER BY ID DESC");
	while($row = mysql_fetch_array($result))
	{
		echo "<div class='post'>";
			echo "<div class='postDate'>". $row['POSTDATE']. "</div>";
			echo "<div class='postBody'>". $row['COMMENT']. "</div>";
		echo "</div>";
	}
	mysql_close($con);
?> 