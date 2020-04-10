<?php
include "navbarsbootsdtrap.php";
include "logindb.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<h1 style="color: black;">Login</h1>
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
		<br>
		<br>
		<h3>Follow us on</h3>
		<br>
		<div class="row follows">
		<div class="col">
		<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
	</div>
	<div class="col">
		<a href="https://www.instagram.com/?hl=en" class="fa fa-instagram"></a>
	</div>
	<div class="col">
		<a href="https://web.telegram.im/" class="fa fa-telegram"></a>
	</div>
	<div class="col">
		<a href="https://twitter.com/login?lang=en" class="fa fa-twitter"></a>
	</div>
	</div>
	</div>
</body>
</html>