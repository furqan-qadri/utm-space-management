<?php

$user = "root";
$pass = "";
$db = "room_bookings";

$connection = new mysqli("localhost", $user, $pass, $db);

if($connection->connect_error){
	die("unable to connect".$connection->connect_error);
}

$table="CREATE TABLE Lecturer(
	
	id VARCHAR(10) PRIMARY KEY,
	Name VARCHAR(30),
	Email VARCHAR(30),
	Username VARCHAR(20),
	Password VARCHAR(20),
	Department VARCHAR(10),
	Course VARCHAR(20),
	Mobile int(12),
	OfficeNo VARCHAR(6),
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	
	)";
	
	if($connection->query($table)==true){
		echo "Table Created Successfully";
	}
	else{
		echo "error".$connection->error;
	}

?>