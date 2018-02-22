<?php
	if((isset($_GET['email']) && !empty($_GET['email'])) && (isset($_GET['dob']) && !empty($_GET['dob'])))
	{
		require_once('connectDB.php');
		$email = mysqli_escape_string($con,$_GET['email']);
		$dob = mysqli_escape_string($con,$_GET['dob']);

	

		$query = 'select * from users where email = "'.$email.'" and dob = "'.$dob.'"';
		$result = mysqli_query($con,$query);
		if($result && mysqli_affected_rows($con) == 1)
		{
			mysqli_close($con);
			session_start();
			$_SESSION['email'] = $email;
			header('location:resetpassword.php');
		}
		else{
			mysqli_close($con);
		}
	}
	else
	{
	}
?>