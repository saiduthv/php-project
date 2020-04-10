<?php
include "navbarsbootsdtrap.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home of TECHZILLA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.img1
  	{
  		width:200px;
      height: 150px;
  		 display: block;
  margin-left: auto;
  margin-right: auto;
  border-radius: 10px;
  	}
    .img
    {
      border-radius: 10px;
    }
  	.img2
  	{
  		font-style: italic;
  	}
  	.img1:hover,.img:hover
  	{
  		opacity: 0.75;
  		transition-duration: 0.2s;
  		transform: scale(1.1);
  	}
  	.footer 
  	{
   position: sticky;
   left: 0;
   bottom: 0;
   background-color:rgb(0, 26, 51);
   color: white;
   border-radius: 15px;
   padding: 15px;
   height: 70px;
   font-size: 30px;

}
.bod
{
	background-color: black;
}
.ta
{
	padding-left: 20px;
}
.car
{
	border-radius: 20px;
}
.c
{
	font-size: 15px;
}
.ka
{
	background-color: rgb(217, 218, 195);
	border-radius: 50px;
}
h4,p
{
  color: white;
}
.b
{
  border-radius: 15px;
}
</style>
</head>
<body class="bod">

<div class="container ">
  <div class="col-lg-"></div>
  <div id="myCarousel" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators ">
     <li data-target="#myCarousel" data-slide to="0" class="active "></li>	
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
     
    </ol>
    <div class="carousel-inner ">

      <div class="item active ">
        <img src="phones2.jpg" style="width:100%; height: 50%">
        <div class="carousel-caption">
          <h3>Mobiles</h3>
          <p>you prefer</p>
        </div>
      </div>

      <div class="item">
        <img src="Laptops.jpg" style="width:100%; height:50%">
        <div class="carousel-caption">
          <h3>Latops and desktops</h3>
          <p>you deserve</p>
        </div>
      </div>
    
      <div class="item">
        <img src="phones.jpg" style="width:100%; height: 50%">
        <div class="carousel-caption">
          <h3>welcome</h3>
          <p>to the world of yours</p>
        </div>
      </div>
  <div class="item">
        <img src="laptops2.jpg" style="width:100%; height: 50%">
        <div class="carousel-caption">
          <h3>welcome</h3>
          <p>to the world of yours</p>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<br>
<div class="container" style="font-size: 20px; color: white">Offers on top brands</div>
<div class="container">
	<div class="row">
    <div class="col-md-1"></div>
		<div class="col">
			<a href="under10k.php"><img src="lenovo-z6-pro-l78051-original-imafkfuxrh8safhb.jpeg" class="img" alt="Diwali"></a>
      <br>
      <br>
			<p class="ta ">MOBILES</p>
		</div>
		<div class="col">
			<a href="apple.php"><img src="acer-na-thin-and-light-laptop-original-imaf99f6bwhnrhum.jpeg" class="img1" alt="Forest fog"></a>
      <br>
      <br>
      <a href="apple.php"><img src="dell-ins-i5.jpeg" class="img1" alt="Forest fog"></a>
      <br>
      <br>
			<p class="text-center ta">LAPTOPS</p>
		</div>
		    <div class="col">
      <a href="apple.php"><img src="macbookpro-i5.jpeg" class="img1" alt="Forest fog"></a>
      <br>
      <br>
       <a href="apple.php"><img src="macbookpro-i5-3.jpeg" class="img1" alt="Forest fog"></a>
       <br>
       <br>
      <p class="text-center ta">MACBOOK</p>
    </div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<div class="container bg-dark b">
<p style="color: white; font-size: 20px; opacity: 0.5" >Hai! This website helps you to fin out the best Mobiles an Laptops in the best brands. This gives you the clear idea on the products that you prefer to buy from the specific brands.</p>
</div>
<br>
<br>
<br>
<br>
<br>
<div class=" footer text-center">
  <p>follow us on <a href="https://www.facebook.com/" class="fa fa-facebook footer"></a> <a href="https://www.instagram.com/?hl=en" class="fa fa-instagram footer "></a> <a href="https://twitter.com/login?lang=en" class="fa fa-twitter footer "></a> <a href="https://web.telegram.im/" class="fa fa-telegram footer"></a></p>

</div>
</body>
</html>
