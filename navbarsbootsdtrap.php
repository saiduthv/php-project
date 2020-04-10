<?php
session_start();
 $f=$_SESSION['user'];
if(isset($_POST["logout"]))
{

  session_unset();
  echo "<script>location.href='home.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="diwali.jpg" type="image/gif" sizes="16x16" >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    .raj
    {
      float: right;
    }
    .mani
    {
      color: white;
    }
    .kanta
    {
      position: sticky;
      background-color: rgb(0, 26, 51);
      border-radius: 20px;
    }
    li a:hover
    {
      color: cyan;
      border-radius: 20px;
      background-color: rgb(0, 53, 102);
      transition-duration: 0.1s;
    }
    .rm
    {
  
      border-radius: 5px;
      transition-duration: 0.5s;
      background-color: rgb(218, 253, 239);
      overflow: hidden;
    }
    .rm a:hover
    {
      background-color: rgb(218, 216, 239);
    }
    .rs
    {
      color: black;
    }
    .para
    {
      color: green;
      opacity: 0.5;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm kanta">
  <ul class="navbar-nav ma">
    <li class="nav-item">
      <a class="nav-link mani" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link mani dropdown-toggle-hover" data-toggle="dropdown" href="#">Mobiles</a>
      <div class="dropdown-menu rm">
        <a class="dropdown-item rs" href="under10k.php">under 10k</a>
        <a class="dropdown-item rs" href="under20k.php">under 20k</a>
        <a class="dropdown-item rs" href="under30k.php">under 30k</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link mani dropdown-toggle-hover" data-toggle="dropdown" href="#">Laptops and desktops</a>
      <div class="dropdown-menu rm">
        <a class="dropdown-item rs" href="apple.php">Apple</a>
        <a class="dropdown-item rs" href="dell.php">Dell</a>
        <a class="dropdown-item rs" href="acer.php">Acer</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link mani" href="aboutus.php">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link mani" href="signup.php">Signup</a>
    </li>
    <li class="nav-item">
      <a class="nav-link mani" href="login.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link mani" href="admin.php">Admin</a>
    </li>
  </ul>
</nav>
<div class="container">
<div class="row">
  <div class="col text-left">
    <?php echo "<h1 style=color:white>welcome </h1>","<h1 style=color:white>",$f,"</h1>";?>
  </div>
  <div class="col text-right">
        <form method="POST"><input type="submit" value="logout" name="logout">
        </form>
  </div>
</div>
</div>
<br>
</body>
</html>