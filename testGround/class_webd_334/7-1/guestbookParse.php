<?php

//  IMPORTANT!!!! Connect to MySQL database here(put your connection data here)
mysql_connect("mysql.students.franklin.edu/","f11waniga01","8868AbLP") or die (mysql_error());
mysql_select_db("testschema") or die (mysql_error());

if ($_POST['comType'] == "parseComment") {

    $name = $_POST['userName'];
	$location = $_POST['userLocation'];
    $comment = $_POST['userMsg'];
    // Filter user input a little bit further using PHP if you allow more characters than I do in the Flash input text field
    //$name = mysql_real_escape_string($name);
    //$location = mysql_real_escape_string($location);
    //$post = mysql_real_escape_string($comment);
	// uncomment this line below to preserve line breaks, paragraphs and such in the comment text
    //$post = nl2br(htmlspecialchars($comment));
    // Add to DB
    $sql = mysql_query("INSERT INTO guestbook (name, post_date, comment, location) 
        VALUES('$name', now(),'$comment','$location')")  
        or die (mysql_error());
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// Assemble body and send back to flash showing their new comment or entry
	$body = "";
    $sql = mysql_query("SELECT * FROM guestbook ORDER BY post_date DESC"); 
    while($row = mysql_fetch_array($sql)) {
		$id = $row["id"];
		$name = $row["name"];
		$post_date = $row["post_date"];
		$comment = $row["comment"];
		$location = $row["location"];
		//$n_post_body = str_replace("<br />", "", $n_post_body); // Use in case you get too many line breaks when preserving breaks
		$comment = stripslashes($comment);
		$name = eregi_replace("&#39;", "'",  $name);
		$location = eregi_replace("&#39;", "'",  $location);
		$comment = eregi_replace("&#39;", "'", $comment);
		// Decode HTML entities if storing comments that preserve line breaks and such
		//$n_post_body = html_entity_decode($n_post_body); // Uncomment to use
		$post_date = strftime("%b %d, %y", strtotime($post_date));

		$body .= '<u><b><font color="#790000">' . $name . '</font>    |    <font color="#9B9B9B">' . $location . '</font>      |      <font color="#9B9B9B">' . $post_date . '</font></b></u>
		<br />
		'.$comment.'
		<br />
		<br />
		';
	}
    mysql_free_result($sql);
    mysql_close();
	 
	 // Echo into flash
     echo "return_msg=Entry has been added successfully $name, thanks!&returnBody=$body";
     exit();

} // close first if for post
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Second part of the script is below, it simply requests all entries for initial display of the guestbook entries
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($_POST['comType'] == "requestEntries") {

    $body = "";
    $sql = mysql_query("SELECT * FROM guestbook ORDER BY post_date DESC"); 
    while($row = mysql_fetch_array($sql)) { 
		$id = $row["id"];
		$name = $row["name"];
		$post_date = $row["post_date"];
		$comment = $row["comment"];
		$location = $row["location"];
		$comment = stripslashes($comment);
		// Decode HTML entities if storing comments that preserve line breaks and such
		//$n_post_body = html_entity_decode($n_post_body); // Uncomment to use
		$post_date = strftime("%b %d, %y", strtotime($post_date));

		$body .= '<u><b><font color="#790000">' . $name . '</font>    |    <font color="#9B9B9B">' . $location . '</font>      |      <font color="#9B9B9B">' . $post_date . '</font></b></u>
		<br />
		'.$comment.'
		<br />
		<br />
		';
	}
    mysql_free_result($sql);
    mysql_close();
    echo "returnBody=$body";
    exit();
} // close first if for post
?>