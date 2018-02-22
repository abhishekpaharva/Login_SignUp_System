<?php
	require_once("connectDB.php");

	$sql = "CREATE TABLE users ( 
	id INT NOT NULL AUTO_INCREMENT , 
	fname VARCHAR(50) NOT NULL , 
	lname VARCHAR(50) NOT NULL ,
	sex VARCHAR(10) NOT NULL , 
	email VARCHAR(150) NOT NULL UNIQUE, 
	password VARCHAR(150) NOT NULL , 
	phoneno BIGINT NOT NULL UNIQUE, 
	dob DATE NOT NULL ,  
	status BOOLEAN NOT NULL DEFAULT FALSE , 
	hash varchar(150) NOT NULL UNIQUE,
	PRIMARY KEY (`id`) 
	)";

	$res = mysqli_query($con,$sql);

	if($res)
	{
		echo "DB CREATED";
	}
	else echo "failed to create DB";


?>