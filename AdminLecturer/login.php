<?php

session_start();

	include("connection.php");
	include("function.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		//something was post
		$username = $_POST['uname'];
		$password = $_POST['psw'];
		
		if(!empty($username) && !empty($password) && !is_numeric($username))
		{
			
			//read database
			$query = "SELECT * FROM Lecturer WHERE Username = '$username' limit 1";
			
			$result = mysqli_query($connection, $query);
			
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $password)
					{
						$_SESSION['id'] = $user_data['id'];
						header("Location: Indexhomepage.php");
						die;
					}
						
				}
				
			}
						echo "Please enter valid information!";
						
			
		}else
		{
			
			echo "Please enter valid information!";
			
		}
		
	}
	
	

?>