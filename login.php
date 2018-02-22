<?php
	$passwordErr = $emailErr = $loginErr = "";
	if(isset($_POST['email']) && !empty($_POST['email']))
	{
		if(isset($_POST['password']) && !empty($_POST['password']))
		{
			require_once("connectDB.php");
			$pass = md5(mysqli_escape_string($con,$_POST['password']));
			$email = mysqli_escape_string($con,$_POST['email']);
			$query = 'select * from users where email = "'.$email.'" and password = "'.$pass.'"';
			$result = mysqli_query($con, $query);
			if(mysqli_affected_rows($con) == 1 && $result)
			{
				session_start();
				mysqli_close($con);
				$rows = mysqli_fetch_array($result);
				if(!$_SESSION['id'])
				{
					$_SESSION['id'] = $rows['id'];
					$_SESSION['fname'] = $rows['fname'];
					$_SESSION['lname'] = $rows['lname'];
					$_SESSION['status'] = $rows['status'];
					$_SESSION['login'] = true;			
					header("location:profile.php");
				}
				else{
					header("location:profile.php");
				}
			}
			else{
				$loginErr = 'Incorrect Email and password';
			}
			mysqli_close($con);
		}
		else{
			$email = $_POST['email'];
			$passwordErr = "enter Password";
		}
	}
	else{
		$emailErr = "enter email";
		if(!$_POST['password'])
		{
			$passwordErr = "enter Password";
		}
	}
?>