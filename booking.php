<head>

<!-- Name: Lisan Shidqi Lazwardi matric no: A20MJ0168-->


</head>

<body>

	<?php

$user = "root";
$pass = "";
$db = "room_bookings";

$connection = new mysqli("localhost", $user, $pass, $db);

if($connection->connect_error){
	die("unable to connect".$connection->connect_error);
}

	$table="CREATE TABLE Space_Manager(
	
	no VARCHAR(10) PRIMARY KEY,
	room VARCHAR(30),
      date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	timeslot VARCHAR(30),
	course VARCHAR(20),
	additional VARCHAR(200),
	Mobile int(12)

	)";
	
	if($connection->query($table)==true){
		echo "Table Created Successfully";
	}
	else{
		echo "error".$connection->error;
	}

?>
	

</body>
</html>