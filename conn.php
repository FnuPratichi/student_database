<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "forxm";


$connection = mysqli_connect($servername,$username,$password,$database);
 if($connection)
 {
 echo "";
 }
else 
{
die("connection lost".mysqli_connect_error());
}
?>