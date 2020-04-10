<?php
include "navbarsbootsdtrap.php";
if(isset($_POST['submit']))
{
	$us=trim($_POST['user']);
	$a="Admin";
	if ($us===$a) {
		$pa=trim($_POST['pass']);
		$b="Admin123";
		if ($pa===$b) {
			echo "<script>location.href='customerdata.php'</script>";
		}
	}
	else
	{
		echo "wrong user name or password";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.bu1
		{
			color: white;
			background-color: rgb(5, 99, 209);
		}
		.bu1:hover
		{
			background-color: rgb(5, 143, 209);
		}
		.man
		{
			border-radius: 10px;
		}
	</style>
</head>
<body style="background-color: black;
  		color: white;">
	<div class="container">
		<div class="jumbotron text-center">
			<h1 style="color: black;">Admin Login</h1>
		</div>
		<form class="form1" method="POST">
			<div class="form-group">
				<label for="Username">Username</label>
				<input type="text" class="form-control man" name="user" placeholder="Enter your username">
			</div>
			<div class="form-group">
				<label for="Password">Password</label>
				<input type="password" class="form-control man" name="pass" placeholder="Enter your password">
			</div>
			<br>
			<div class="form-group">
				<button class="form-control man bu1" type="submit" name="submit">Login</button>
			</div>
		</form>
	</div>
</body>
</html>