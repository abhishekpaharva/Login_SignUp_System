<?php
	error_reporting(E_ALL ^ E_NOTICE);
	if($_SERVER['REQUEST_METHOD'] == POST)
	{
			if(isset($_POST['loginbtn']))
			{
				require_once('login.php');
			}
			elseif (isset($_POST['regisbtn'])) 
			{
				require_once('register.php');
			}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./CSS/style.css">
</head>
<body>
<div id="container">
	<div class='button' >
		<button id='showlogin' onclick="showlogin()">LOGIN</button>
	</div>
	<div class='button' >
		<button id='showregister' onclick="showregister()">REGISTER</button>
	</div>
	<div id='login' class='form'>
		<form action='index.php' method='POST' name='logForm'>
			<div class="form-row">
				<label for='email'>EMAIL</label><br>
				<input type='email' name='email' id='logemail' required>
				<small id='emailErr'><?php echo $emailErr ?></small>
			</div>
			<div class="form-row">
				<label for='pass'>PASSWORD</label><br>
				<input type='password' name='password' id='logpassword' required>
				<small id='passErr'><?php echo $passwordErr ?></small>
			</div>
			<br>
			<div class="form-row">
				<input type='submit' name='loginbtn' value='login'>
				<small id='loginErr'><?php echo $loginErr ?></small>
			</div>
			<a href="forgot.php">Forgot password</a>
		</form>
	</div>
	<div id="register" class='form'>
		<form action="index.php" method="POST" name='form1' onsubmit="return formValid()">
			<div class="form-row">
				<div class="col">
					<label for="fname">First Name</label><br>
					<input type="text" name="fname" id="fname" class="form-control" required>
					<p></p>
				</div>
				<div class="col">
					<label for="lname">Last Name</label><br>
					<input type="text" name="lname" id="lname" class="form-control" required>
					<p></p>
				</div>
			</div>
				<div class="col">
					<label for="dob">Date Of Birth</label><br>
					<input type="date" name="dob" id="dob" class="form-control" required>
					<p></p>
				</div>
				<div class="col">
					<label for="phone">Pnone no</label><br>
					<input type="number"  name="phoneNo" id="phone" class="form-control" required>
					<small id='errorPh'></small>
				</div>
			<div class="form-row">
				sex: <select name='sex'>
					<option>male</option>
					<option>female</option>
				</select>
			</div>
			<div class="form-row">
				<label for="email">Email</label><br>
				<input type="email" name="email" id="regisemail" class="form-control" required>
				<p></p>
			</div>
				<div class="col">
					<label for="pass">Password</label><br>
					<input type="Password" name="password" id="regispassword" class="form-control" required>
					<small ></small >
				</div>
				<div class="col">
					<label for="repass">Re-enter Password</label><br>
					<input type="password" name="repassword" id="repass" class="form-control" required>
					<small id="errorpass"></small >
				</div>
			<div >
				<input type="submit" name="regisbtn" id="regisbtn" value="register">
			</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="./JS/login.js"></script>
</body>
</html>