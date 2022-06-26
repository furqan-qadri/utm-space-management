<?php

$user = "root";
$pass = "";
$db = "room_bookings";

$connection = new mysqli("localhost", $user, $pass, $db);

if($connection->connect_error){
	die("unable to connect".$connection->connect_error);
}

?>