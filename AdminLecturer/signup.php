<html>

<head>



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

if(isset($_POST['submit'])){
	
	if(!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['psw']) && !empty($_POST['department']) && !empty($_POST['course']) && !empty($_POST['mobile']) && !empty($_POST['officeNo'])){
	
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$psw = $_POST['psw'];
		$department = $_POST['department'];
		$course = $_POST['course'];
		$mobile = $_POST['mobile'];
		$office = $_POST['officeNo'];
	
		$query ="INSERT INTO lecturer(id, Name, Email, Username, Password, Department, Course, Mobile, OfficeNo)
		VALUES ('$id', '$name', '$email', '$username', '$psw', '$department', '$course', '$mobile', '$office')";
	
		$run = mysqli_query($connection, $query) or die(mysqli_error());
	
		if($run){
		echo "User Successffully registered";
		}
		else{
			echo "Registration is unsuccessful";
		}
	
	}
	else{
		echo "all fields required";
	}
}



?>
	<button type="button" class="return" style="padding: 0px 0px"><a href="login form.php">LOG IN</a></button>

</body>
</html>