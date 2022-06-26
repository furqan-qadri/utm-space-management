<?php

function check_login($connection)
{
	if(isset($_SESSION['id']))
	{
		$id = $_SESSION['id'];
		$query = "SELECT * FROM lecturer WHERE id = '$id' limit 1";
	
		$result = mysqli_query($connection, $query);
		
		if($result && mysqli_num_rows($result)>0)
		{
			
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
			
		}

	}
	
	//redirect to login
	header("Location: login form.php");
	die;
	
}

?>