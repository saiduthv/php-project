<?php
include "dbconnect.php";
if(isset($_POST["submit"]))
	{
		$s="select Username, Password from customer";
		$rs= $conn->query($s);
		while($row = $rs->fetch_assoc()){
		if($row['Username']==$_POST['user'])
		{
		if($row['Password']==$_POST['pass'])
		{
			session_start();
			$_SESSION['user']=$_POST['user'];
			$_SESSION['pass']=$_POST['pass'];
			header('Location:home.php');
		}
		else
		{
			
		}
		}
		else
		{
		}
	}
}
?>