<?php
class dbconnect{	
	var $username="root";
	var $password="root";
	var $database="blog"; /* Please change this to a proper db once testing is done */
	var $host="localhost";

	function getUname(){
		return $username;
	}
	function getPass(){
		return $password;
	}
	function getDb(){
		return $database;
	}
	function getDbLoc(){
		return $host;
	}
	function getConnectInfo(){
		$connectInfo="'". $host. "','". $username. "', '". $password. "'";
		return $connectInfo;
	}
}
?>