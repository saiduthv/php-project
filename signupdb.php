<?php
$servername="localhost";
$username="root";
$password="";
$dbname="db4";
$conn=new mysqli($servername,$username,$password,$dbname);
$q="insert into customer(Username,Email,Password)
values('$user','$email','$pwd')";
$res=$conn->query($q);
if($res==true)
{
    
}
// else
// {
//     echo "table not created".mysqli_error($conn);
// }
else{
    echo "error:$conn->error"; //we can give both the conditions that to check where the error is in the code
}
?>