<?php

	session_start();
	$db = new mysqli("localhost","root","","sign_up");

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		$query = "INSERT INTO information(username, password, email) VALUES ('$username' , '$password', '$email')";
		$run = mysqli_query($db, $query);

		if($run){
			echo "Registration successful.!";
		}else{
			echo "Registration unsuccessful.!";
			// echo "error".mysql_error($db);
		}
	}

	if(isset($_POST['login'])){
		$username = $_POST['lusername'];
		$password = $_POST['lpassword'];

		$mysqli = new mysqli("localhost","root","","sign_up");
		$result = $mysqli->query("SELECT * FROM information WHERE username = '$username' AND password ='$password' ");
		$row = $result->fetch_assoc();

		if($row['username'] == $username && $row['password'] == $password)
		{
			// $message = "Login successful.!";
			header('location:home.php?Logged');
			echo "Login successful.!";
			// echo "<script type='text/javascript'>alert('$message');</script>";
			
		}
		else{
			// $message1 = "Login Unsuccessful.!";
			echo "Incorrect Password/username.!";
			// echo "<script type='text/javascript'>alert('$message1');</script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>RUET Medical Center</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div class="login-page">
		<div class="form">
			<form action="home.php" method="post" class="register-form">
				<input type="text" name="username" placeholder="Roll.NO" required>
				<input type="password" name="password" placeholder="password" required>
				<input type="text" name="email" placeholder="email id" required>
				<button name="submit">Create</button>
				<p class="message">Have any account?<a href="#">Login</a></p>
			</form>

			<form action="signup.php" method="post" class="login-form">
				<input type="text" name="lusername" placeholder="Roll NO." required>
				<input type="password" name="lpassword" placeholder="password" required>
				<button name="login">Log in</button>
				<p class="message">Don't have any account?<a href="#">Register</a></p>
			</form>
		</div>
	</div>

	<script src='http://code.jquery.com/jquery-3.3.1.min.js'></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstarp.min.js"></script>
	<script src="js/custom.js"></script>

	<script>
		$('.message a').click(function(){
			$('form').animate({height: "toggle",opacity: "toggle"}, "slow");
		});
	</script>

</body>
</html>