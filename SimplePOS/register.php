<?php
$msg = "";
@include 'config.php';
if (isset($_POST["submit"])) {

	$name =  $_POST["name"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$user_type = $_POST['user_type'];

	$conn = mysqli_connect('localhost', 'root', '', 'pointofsale');

	$sql = "INSERT INTO user(name,username,email,password,user_type) VALUES ('$name','$username','$email','$password','$user_type')";
	$result = mysqli_query($conn, $sql);
	if ($result == "true") {
		header("location:index.php");
	} else {
		$msg = "Registration failed. Try agawith another email";
	}
};


?>


<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			font-family: Gotham, Arial, Helvetica, sans-serif;
			color: #333;
			min-height: 100vh;
			background-color: dodgerblue;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.container {
			max-width: 400px;
			padding: 30px;
			background-color: #fff;
			border-radius: 20px;
		}

		input,
		select {
			width: 100%;
			padding: 10px;
			margin-bottom: 10px;
			margin-top: 5px;
			outline: none;
			border: 1px solid #d1d1d1;
			border-radius: 5px;
		}

		input:focus,
		select:focus {
			border: 1px solid dodgerblue;
		}

		#submit {
			background-color: dodgerblue;
			color: #fff;
			border: 0;
			padding: 12px;
		}

		#subnit:hover {
			background-color: #063CCF;
			cursor: pointer;
		}

		.text-center {
			text-align: center;
		}

		.error {
			color: tomato;
			text-align: center;
		}
	</style>
	<title>Registration Form</title>
</head>

<body>
	<div class="container">

		<h2 class="text-center">Registration Form</h2>
		<p class="error"> <?php echo $msg; ?> </p>

		<form action="" method="post">
			<div class="form-floating mb-3 mt-3">
				<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" autocomplete="off" require>
				<label for="name">Name</label>
			</div>

			<div class="form-floating mb-3 mt-3">
				<input type="text" class="form-control" id="username" placeholder="Enter username" name="username" autocomplete="off" require>
				<label for="username">Username</label>
			</div>

			<div class="form-floating mb-3 mt-3">
				<input type="text" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off" require>
				<label for="email">Email</label>
			</div>


			<div class="form-floating mb-3 mt-3">
				<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" autocomplete="off" require>
				<label for="password">Password</label>
			</div>

			<div class="form-floating mb-3 mt-3">
				<input type="password" class="form-control" id="cpassword" placeholder="Enter password" name="cpassword" autocomplete="off" require>
				<label for="cpassword">Retype Password</label>
			</div>

			<select name="user_type" require="required" id="user_type">
				<option selected>User Type</option>
				<option value="admin">admin</option>
				<option value="user">user</option>
			</select>

			<input name="submit" type="submit" id="submit" value="REGISTER NOW">


		</form>
		<p class="text-center"><small>Already have an account? <a href="login.php"> Login </a></small></p>
	</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>