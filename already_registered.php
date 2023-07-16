<?php
include('includes/connection.php');

if(isset($_POST['userlogin']))
{
	$email = $_POST['Email_ID'];
	$password = $_POST['password'];
	
	$query = "SELECT Email_ID, password, Name, UID FROM users WHERE Email_ID = ? AND password = ?";
	$stmt = mysqli_prepare($connection, $query);
	mysqli_stmt_bind_param($stmt, "ss", $email, $password);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	
	if(mysqli_num_rows($result) > 0)
	{
		echo "<script type='text/javascript'>
			window.location.href = 'user_dashboard.php';
		</script>";
	}
	else
	{
		echo "<script type='text/javascript'>
			alert('Please enter correct details');
			window.location.href = 'ualready_registered.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TaskEase</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="row">
		<div class="col-md-3 m-auto" id="login_home_page">
			<form action="" method="post">
				<center><h3>USER LOGIN</h3></center>
				<div class="form-group">
					<input type="email" name="Email_ID" class="form-control" placeholder="Enter your Email ID" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Your Password" required>
				</div>
				<div class="form-group">
					<center><input type="submit" name="userlogin" value="Login" class="btn btn-warning"></center>
				</div>
			</form>
			<a href="index.php" class="btn btn-danger">Back to Home Page</a>
		</div>
	</div>
</body>
</html>
