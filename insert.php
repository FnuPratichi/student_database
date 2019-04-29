<?php
include ("conn.php");
?>






<html>
<link rel="stylesheet" href="form.css">
<h1>ENTER THE DETAILS OF THE STUDENTS </h1>
<form name="myform" action="" method="GET" >
NAME : <input type="text" name="firstname" required><br><br>
CLASS : <input type ="teXt" name="nameofclass" required><br><br>
EMAIL : <input type="email" name="email" required> <br><br>
PHONE NUMBER : <input type="tel" name="phone" required><br><br>
<input type="submit" value="submit" name="submit" >
</form>
</html>





<?php
session_start();


if(isset($_GET['submit']))
{	
   $FS = $_GET['firstname'];
    $CL = $_GET['nameofclass'];
    $EM = $_GET['email'];
    $PN = $_GET['phone'];
	
	
  if($FS!="" && $CL!="" && $EM!="" && $PN!="")
  {
   $query =  "INSERT INTO ANKUAGAIN VALUES('$FS' ,'$CL', '$EM' ,'$PN')";
    $data = mysqli_query($connection,$query);
    if($data)
     {
     echo "Data added successfully";	
     }
   }
 else
  {
 echo "all fields are required"; 
}
}
?>
