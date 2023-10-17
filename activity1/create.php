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
		}

		.container {
			max-width: 400px;
			margin: 0 auto;
			padding: 20px;
			background-color: rgba(0, 0, 0, 0.8);
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
		}

		.heading {
			text-align: center;
			color: #4caf50;
		}

		.login-box {
			margin-top: 20px;
		}

		.form-group {
			margin-bottom: 20px;
		}

		.input-field {
			width: calc(100% - 20px);
			padding: 10px;
			font-size: 16px;
			border: 1px solid #4caf50;
			background-color: rgba(255, 255, 255, 0.1);
			color: #ffffff;
			border-radius: 5px;
			margin-bottom: 10px;
		}

		.input-field:focus {
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

		.background-image {
			background: url('your-background-image-url.jpg') center/cover no-repeat;
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			z-index: -1;
		}
	</style>
</head>

<body>
	<div class="background-image"></div>
	<div class="container">
		<h1 class="heading">Create an Account</h1>
		<form class="login-box" onsubmit="return storeDataLocally();" method="POST">
			<div class="form-group">
				<input class="input-field" type="text" placeholder="Create Username" name="username" required>
			</div>
			<div class="form-group">
				<input class="input-field" type="email" placeholder="Create Email Address" name="email" required>
			</div>
			<div class="form-group">
				<input class="input-field" type="text" placeholder="First Name" name="fname" required>
			</div>
			<div class="form-group">
				<input class="input-field" type="text" placeholder="Last Name" name="lname" required>
			</div>
			<div class="form-group">
				<input class="input-field" type="password" placeholder="Enter Password" name="pwd" required>
			</div>
			<p><a href="index.php" id="mini">Already have an account?</a></p>
			<button class="btn" type="submit" name="submit">Create Account</button>
		</form>
	</div>

	<script>
		function storeDataLocally() {
			var usernameInput = document.querySelector('input[name="username"]');
			var emailInput = document.querySelector('input[name="email"]');
			var fnameInput = document.querySelector('input[name="fname"]');
			var lnameInput = document.querySelector('input[name="lname"]');
			var pwdInput = document.querySelector('input[name="pwd"]');

			var username = usernameInput.value;
			var email = emailInput.value;
			var fname = fnameInput.value;
			var lname = lnameInput.value;
			var pwd = pwdInput.value;

			var userObject = {
				username: username,
				email: email,
				fname: fname,
				lname: lname,
				pwd: pwd
			};

			localStorage.setItem('userData', JSON.stringify(userObject));

			usernameInput.value = '';
			emailInput.value = '';
			fnameInput.value = '';
			lnameInput.value = '';
			pwdInput.value = '';

			return false;
		}
	</script>
</body>

</html>
