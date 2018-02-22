<?php
	require_once("connectDB.php");

	$fname = mysqli_escape_string($con,$_POST['fname']);
	$lname = mysqli_escape_string($con,$_POST['lname']);
	$sex = mysqli_escape_string($con,$_POST['sex']);
	$email = mysqli_escape_string($con,$_POST['email']);
	$pass = md5(mysqli_escape_string($con,$_POST['password']));
	$phoneno = mysqli_escape_string($con,$_POST['phoneNo']);
	$dob = mysqli_escape_string($con,$_POST['dob']);
	$hash = mysqli_escape_string($con, md5(rand(0,1000)));

	$query = 'insert into users(fname,lname,sex,email,password,phoneno,dob,hash,status) values("'.$fname.'","'.$lname.'","'.$sex.'","'.$email.'","'.$pass.'","'.$phoneno.'","'.$dob.'","'.$hash.'","0")';
	$result = mysqli_query($con,$query);

	if(mysqli_affected_rows($con) === 1 && $result)
	{
		mysqli_close($con);
		session_start();
		$_SESSION['fname'] = $fname;
		$_SESSION['lname'] = $lname;
		$_SESSION['status'] = 0;
		$_SESSION['login'] = true;

		/*$to = $email;
		$sub = 'ACCOUNT VERIFICATION';
		$msg = '
		Hello '.$fname.' '.$lname.',
		thankyou for registraton

		http://localhost/verify.php?email='.$email.'&hash='.$hash;

		mail($to,$sub,$msg);

		header('location:profile.php');*/
	}
	else{
		echo "<html><body><script>alert('user already registered');</script></body></html>";
		mysqli_close($con);
	}
?>