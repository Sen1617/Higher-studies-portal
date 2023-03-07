<?php  
 //get department name
 $deptname=$_POST['dept'];
 //get registernumber
 $rollnum=$_POST['rn'];
 
 $con = mysqli_connect("localhost", "root", "", "hsportal");  
 $output = '';  
 $qry=mysqli_query($con,"SELECT * FROM course_tbl WHERE dept='$deptname'") or die("not available any course for ".$deptname);
  
 if(mysqli_num_rows($qry)>0){
    while($row = mysqli_fetch_array($qry)){
           $output .= '  
           <div class="col-md-4">
          <div class="card">
        <div class="cardbody">
          <h2 class="gtype">'. $row['coursename'].'</h2><h5><b>'. $row['fullform'].'</b></h5>
          </div><br><div class="boxdes">
          <p class="des">'.$row['descp'].'</p></div>
        <div class="cardfoot">
          <div><h4></h4></div>
          <div><button type="button" class="btn btn-warning" name="warning_btn" data-id4="'.$row["cid"].'">Select</button></div>
        </div>
      </div>
      </div>';  
      }  
      
 }  
 else  
 {  
      $output .= 'PORTAL HAS NOT INCLUDED ANY COURSES FOR '.$deptname;  
 }  
 
 echo $output;  
 ?>