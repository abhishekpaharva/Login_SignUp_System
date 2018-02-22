<?php
	if((isset($_GET['email']) && !empty($_GET['email'])) && ((isset($_GET['hash'])) && !empty($_GET['hash'])))
	{
		require_once('connectDB.php');
		$email = mysqli_escape_string($con,$_GET['email']);
		$hash = mysqli_escape_string($con,$_GET['hash']);

		$query = 'select * from users where email = "'.$email.'" and hash = "'.$hash.'"';
		$result = mysqli_query($con,$query);
		if($result && mysqli_affected_rows($con))
		{
			$rows = mysqli_fetch_array($result);
			if($rows['status'] == 0)
			{
				$query = 'update users set status = 1 where email = "'.$email.'" and hash = "'.$hash.'"';
				$result = mysqli_query($con,$query);
				if($result)
				{
					echo "<h1>thankyou for verify your email</h1>";
					echo "<br><a href = 'index.php'>LogIn</a>";
				}
			}
			else{
				header('location:index.php');
			}
		}
		else{
			echo "please register again";
		}
	}
	else{
		echo "Invalid URL";
	}
?>