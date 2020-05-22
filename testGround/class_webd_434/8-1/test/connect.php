<?php

/* Database config */

$db_host		= 'mysql.students.franklin.edu';
$db_user		= 'w12waniga01';
$db_pass		= '67taFfzg';
$db_database		= 'w12waniga01'; 

/* End config */


$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_database,$link);

?>