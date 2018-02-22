<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	if($_SERVER['REQUEST_METHOD'] == POST)
	{
		if(isset($_POST['submitbtn']))
		{
			require_once('connectDB.php');
			$pass = md5(mysqli_escape_string($con,$_POST['password']));
			$email = $_SESSION['email'];

			$query = 'update users set password ="'.$pass.'" where email ="'.$email.'"';
			$result = mysqli_query($con,$query);
			if($result && mysqli_affected_rows($con) == 1)
			{
				mysqli_close($con);
				header('location:index.php');
			}
			else{
				mysqli_close($con);
				$error = 'reset password failed';
			}
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>RESET PASSWORD</title>
	<link rel="stylesheet" type="text/css" href="./CSS/forgot.css">
</head>
<body>
<div id="container">
	<form action="resetpassword.php" method="POST" name='form1' onsubmit="return formValid()">
		<h2>Please set your new password</h2>
		<div>
			<label>PASSWORD</label>
			<input type="password" name="password" class="inp">
		</div>
		<br>
		<div>
			<label>RETYPE PASSWORD</label>
			<input type="password" name="repassword" class="inp">
		<div>
			<small id="errorpass"></small>
		<br>
			<input type="submit" name="submitbtn" id="sub">
			<small><?php echo $error; ?></small>
	</form>
	</div>
<script type="text/javascript" src="./JS/reset.js"></script>
</body>
</html>