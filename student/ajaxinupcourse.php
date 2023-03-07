<?php  
//get course id
 $crid=$_POST['id'];
 //get registernumber
 $rollnum=$_POST['rn'];

	$con = mysqli_connect("localhost", "root", "", "hsportal");

    $cr=mysqli_query($con,"SELECT * FROM course_tbl WHERE cid='$crid'");
    $selcr=mysqli_fetch_array($cr);
    $crname=$selcr['coursename'];


    $sql = "UPDATE student_tbl SET cour_id='".$crname."' WHERE reg_id='".$rollnum."'";  
	if(mysqli_query($con, $sql))  
	{  
		echo 'Selected '.$crname;
		  
	}  
 ?>