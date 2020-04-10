<?php
include "navbarsbootsdtrap.php";
$rr=array("user"=>'',"email"=>'',"pwd"=>'',"confirmpassword"=>'',"optradio"=>'');
if(isset($_POST["btn"]))
{
  $user = trim($_POST["user"]);
  if(empty($user))
  {
    $rr['user']="<h5 style=color:red;>name can't be blank!!!</h5>"."<br>";
  }
  else
  {
    if(!preg_match("/^[a-zA-Z ]+$/",$user))
    {
      $rr['user']= "<h5 style=color:red;>name can be alphabets and spaces only</h5>"."<br>";
    }
    
  }
  $email = trim($_POST["email"]);
  if(empty($email))
  {
    $rr['email']="<h5 style=color:red;>enter valid mail!!!</h5>"."<br>";
  }
  else
  {
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
      $rr['email']="<h5 style=color:red;>email has to be valid email address</h5>"."<br>";
    }
  }
  $pwd = trim($_POST["pwd"]);
  if(empty($pwd))
  {
    $rr['pwd']="<h5 style=color:red;>enter This Field!!!</h5>"."<br>";
  }
  else
  {
    if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}$/",$pwd))
    {
      $rr['pwd']="<h5 style=color:red;>Password matching expression. Password must be at least 4 characters, and must include at least one upper case letter, one lower case letter, and one numeric digit.</h5>"."<br>";
    }
  }
  $confirmpassword = trim($_POST["confirmpassword"]);
  if(empty($confirmpassword))
  {
    $rr['confirmpassword']="<h5 style=color:red;>This can't be blank!!!</h5>"."<br>";
  }
  else
  {
    if($confirmpassword!=$pwd)
    {
      $rr['confirmpassword']= "<h5 style=color:red;>enter the correct password as above</h5>"."<br>";
    }
    
  }
  $optradio =trim($_POST["optradio"]);
  if(empty($optradio))
  {
    $rr['optradio']="<br><br>"."<h5 style=color:red;>please select this column</h5>"."<br>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.form1
  	{
  		width: 100%;
  		border-radius: 20px;
  		border-color: red;
  	}
  	.body1
  	{
  		background-color: black;
      color: white;
  	}
  </style>
</head>
<body class="body1">

<div class="container">
	<div class="jumbotron text-center form1">
		<h3 style="color: black;">Sign up</h3>
	</div>
  <form class="form1" method="POST">
  	<div class="form-group">
  		<label for="username">Username:</label>
  		<input type="text" name="user" class="form-control" placeholder="Enter username">
      <div class="rr-msg"><?php echo $rr['user']?></div>
  	</div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
      <div class="rr-msg"><?php echo $rr['email']?></div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password">
      <div class="rr-msg"><?php echo $rr['pwd']?></div>
    </div>
    <div class="form-group">
    	<label for="conpas">Confirm password:</label>
    	<input type="password" name="confirmpassword" class="form-control" placeholder="confirm password">
      <div class="rr-msg"><?php echo $rr['confirmpassword']?></div>
    </div>
    <div class="form-group">
    	Gender:
    <div class="form-check-inline">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">Male
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Female
      </label>
      <div class="rr-msg"><?php echo $rr['optradio']?></div>
    </div>
</div>
    <button type="submit" class="btn" style="background-color: lightgreen;" name="btn">Submit</button>
</div>
</form>
</div>
<?php
include "signupdb.php";
?>
</body>
</html>