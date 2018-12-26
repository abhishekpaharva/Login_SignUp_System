<?php
	error_reporting(E_ALL ^ E_NOTICE);
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(isset($_POST['submitbtn']))
		{
			if(((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['dob']) && !empty($_POST['dob']))))
			{
				require_once("connectDB.php");

				$email = mysqli_escape_string($con,$_POST['email']);
				$dob = mysqli_escape_string($con,$_POST['dob']);
				
				$query = "select * from users where email = '".$email."' and dob = '".$dob."'";

				$result = mysqli_query($con,$query);
				if(mysqli_affected_rows($con) == 1 && $result)
				{
					mysqli_close($con);

					$to = $email;
					$sub = 'RESET PASSWORD';
					$msg = 'http://your-website-name/reset.php?email='.$email.'&dob='.$dob;
					mail($to,$sub,$msg);
					echo "<h1>Reset email has been send(please check your email indox and spam box )</h1>";
				}
				else{
					mysqli_close($con);
					$error = "No users found";
				}
			}
			else{
					$error = "please fill all details";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>forgot password</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="./CSS/forgot.css">
</head>
<body>
<div id="container"> 
	<form action="forgot.php" method="POST">
		<div>
			<label>Email</label>
			<input type="email" name="email" class="inp" required>
		</div>
		<br>
		<div>
			<label for="dob">Date of Birth</label>
			<input type="date" name="dob" id="dob" class="inp" required>
		</div>
		<br>
			<input type="submit" name="submitbtn" id="sub" >
			<small id="error"></small><?php echo $error ?></small>
	</form>
</div>
</body>
</html>
