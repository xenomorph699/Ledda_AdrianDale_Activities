<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create an Account</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #1a1a1a;
			color: #ffffff;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.container {
			max-width: 400px;
			padding: 20px;
			background-color: rgba(0, 0, 0, 0.8);
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
		}

		.heading {
			text-align: center;
			color: #4caf50;
		}

		.textbox {
			position: relative;
			margin-bottom: 20px;
		}

		.textbox input {
			width: calc(100% - 20px);
			padding: 10px;
			font-size: 16px;
			border: 1px solid #4caf50;
			background-color: rgba(255, 255, 255, 0.1);
			color: #ffffff;
			border-radius: 5px;
		}

		.textbox input:focus {
			outline: none;
		}

		.btn {
			background-color: #4caf50;
			color: white;
			border: none;
			padding: 12px 20px;
			font-size: 16px;
			cursor: pointer;
			border-radius: 5px;
		}

		.btn:hover {
			background-color: #45a049;
		}

		#mini {
			text-decoration: none;
			color: #4caf50;
		}

		#mini:hover {
			text-decoration: underline;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1 class="heading">Create an Account</h1>
		<form class="login-box" method="POST" onsubmit="return storeDataLocally();">
			<div class="textbox">
				<input class="nameForm" type="text" placeholder="Create Username" name="username" required>
			</div>
			<div class="textbox">
				<input type="email" placeholder="Create Email Address" name="email" required>
			</div>
			<div class="textbox">
				<input type="text" placeholder="First Name" name="firstname" required>
			</div>
			<div class="textbox">
				<input type="text" placeholder="Last Name" name="lastname" required>
			</div>
			<div class="textbox">
				<input type="password" placeholder="Enter Password" name="password" required>
			</div>

			<p><a href="index.php" id="mini">Already have an account?</a><br></p>

			<button class="btn" type="submit" name="submit">Create Account</button>
		</form>
	</div>

</body>

<?php
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$pwd = $_POST['password'];
	mysqli_query($conn, "INSERT INTO users( username, email, firstname, lastname, password) 
				VALUES( '$username', '$email', '$fname', '$lname', '$pwd')");
}
?>

</html>
