<?php
	$hostname='localhost';
	$user = 'suryo';
	$password = 'sury@sury0';
	$mysql_database = 'tokogkkd';
	$db = mysqli_connect($hostname, $user, $password,$mysql_database);
	if($db->connect_error)
	{
		die("Database Connection Error, Error No.: ".$db->connect_errno." | ".$db->connect_error);
	}
