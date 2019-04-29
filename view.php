<?php
include("conn.php");
$query = "SELECT * FROM ANKUAGAIN";
$data = mysqli_query($connection,$query);
$total = mysqli_num_rows($data);


echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">NAME</font></td> 
          <td> <font face="Arial">CLASS</font> </td> 
          <td> <font face="Arial">EMAIL</font> </td> 
          <td> <font face="Arial">PHONE_NUMBER</font> </td> 
          
      </tr>';
if($total!=0)
{ 
    while($result = mysqli_fetch_assoc($data))
	{

	    $NAME = $result["name"];
        $CLASS = $result["class"];
        $EMAIL = $result["email"];
        $PHONE_NUMBER = $result["phone"];
         
 
       
			 echo '<tr> 
                  <td>'.$NAME.'</td> 
                  <td>'.$CLASS.'</td> 
                  <td>'.$EMAIL.'</td> 
                  <td>'.$PHONE_NUMBER.'</td> 
                   
                  </tr>';
	}	
	}
	
	
	
	

else
{
echo "error";	
	
	
}