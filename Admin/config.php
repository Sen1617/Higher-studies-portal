<?php
$con=new mysqli("localhost","root","","hsportal");
 if($con->connect_error)
 {
 	echo $con->connect_error;
 	die("sorry data base connection failed..!");
 }
//else
//{
	//echo "Data base connected";
//}
?>