<?php
	
	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "loginsystem";

	$con = mysqli_connect($host,$user,$password,$dbname);
	if(!$con)
	{
		echo "can't connect to database";
	}
?>