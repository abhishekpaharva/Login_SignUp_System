<?php
	error_reporting(E_ALL^E_NOTICE);
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="./CSS/style.css">
</head>
<body>
	<div id='container'>
	<?php
		if(!$_SESSION['login'])
		{
			die('user logged out');
		}
	?>
	<div>
		<h1>Welcome 
			<?php 
			echo $_SESSION['fname'];
			echo  ' '.$_SESSION['lname'];
			?>
		</h1>
		<h3>
			<?php
				if($_SESSION['status'] == false)
				{
					echo '<br><h3>Please verify your email (Please check your email INBOX and SPAM BOX)</h3>' ;
				}
			?>
		</h3>
		<?php
			echo '<br>'."<a href = 'logout.php'><button>logout</button></a>";
		?>
	</div>
</div>
</body>
</html>