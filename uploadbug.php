<?php
include 'navbarsbootsdtrap.php';
if(isset($_POST["submit"]))
{
    $fil=$_FILES["upfile"];
    $filnam=$fil["name"];
    print_r("<h1 class=text-center >thank you for helping us to make you happy</h1>");
    print_r("<h3 class=text-center >".$filnam."</h3>");
    echo "<br>";
    echo "<br>";
    $lokation=$fil["tmp_name"];
    $size=$fil["size"];
    $xt=explode('.',$filnam);
    $lxt=array('png','jpg','jpeg','mp3','mp4','pdf');
    $loxt=strtolower($xt[1]);
    if(in_array($loxt,$lxt))
    {
        if($size<1000000)
        {
            $n=uniqid('users',true);
            $sink='improvements/'.$n.'.'.$loxt;
            move_uploaded_file($lokation,$sink);
        }
        else{
            echo "<br>";
            echo "<h1 class=text-center>But file size exceeded.</h1?>";
        }
    }
    else{
        echo "<br>";
        echo "<h1 class=text-center>But file not supported.</h1>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uploading a bug</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
      .c
      {
        color: white;
        background-color: rgb(6, 18, 44);
        border-radius: 10px;
        opacity: 0.75;
      }
      .c:hover
      {
        border-radius: 20px;
        opacity: 1.0;
        transition-duration: 0.2s;
        transition-delay: 0.2s;
      }
  </style>
</head>
<body class="con">
    <div class="container ">
        <div class="col-lg-12">
<form action="uploadbug.php" method="POST" enctype="multipart/form-data">
<h2 class="text-center">Select file to upload</h2>
<br>
<br>
<input type="file" name="upfile">
<br>
<button name="submit" class="form-control c">Upload</button>
<br>
<p class="text-right">Please upload the png, jpg, jpeg, mp3, mp4, pdf.</p>
</form>
</div>
</div>
</body>
</html>