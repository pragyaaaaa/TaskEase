<?php
	include('includes/connection.php');

	if(isset($_POST['New_Registration'])){
		$name = $_POST['Name'];
		$email = $_POST['Email_ID'];
		$password = $_POST['password'];
		$mobileNumber = $_POST['mobile_number'];

		$query = "INSERT INTO users (`Name`, `Email_ID`, `Password`, `Mobile_Number`) VALUES ('$name', '$email', '$password', '$mobileNumber')";

		$query_run = mysqli_query($connection, $query);

		if($query_run){
			echo "<script type='text/javascript'>
			alert('User registered successfully..');
			window.location.href = 'index.php';
			</script>";
		}
		else{
			echo "<script type='text/javascript'>
			alert('Error...Please Try again');
			window.location.href = 'New_registration.php';
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
		<div class="col-md-3 m-auto" id="New_registration">
			<form action="" method="post">
				<center><h3>New Registration</h3></center>
				<div class="form-group">
					<input type="text" name="Name" class="form-control" placeholder="Enter your Full Name" required>
				</div>
				<div class="form-group">
					<input type="email" name="Email_ID" class="form-control" placeholder="Enter your Email ID" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Your Password" required>
				</div>
				<div class="form-group">
					<input type="password" name="confirm_password" class="form-control" placeholder="Re-enter Your Password" required>
				</div>
				<div class="form-group">
					<input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number" required>
				</div>
				<div class="form-group">
					<center><input type="submit" name="New_Registration" value="REGISTER" class="btn btn-warning"></center>
				</div>
				<a href="index.php" class="btn btn-danger">Back to Home Page</a>
			</
