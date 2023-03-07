<?php  
		require_once "config.php";
    	?>
<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    
    <meta charset="utf-8">
    
      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/footer.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- css style go to end here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<style>
		#prof
		{	margin-top:px;
			width:20%;
			height:625px;
			border-bottom: 700px;
			text-align: center;
			min-height: 0px;
			background-size:cover; 
			color: white;
   	 		float: left;
		}
		#prof1
		{
			text-align: center;

		}
		table
		{
			text-align:left;
			margin-left: 25px;

		}
	#ser img
	{	
		
		margin-top: 100px;
		width:250px;
		height:180px;
		margin-left:5px;
		padding:5px;
	}
	#prof div div h2 {
	font-size: 10px;
}
    #prof div div h2 {
	font-size: 18px;
}
    #prof div div h2 {
	font-size: 18px;
	color: #FF0;

}

.boxhead{
    background-color: #c01a1a;
    padding: 2%;
    font-size: 25px;
    font-weight: 500;
    width:100%;
    position: relative;
}
.boxcontent{
    background-color: #ebebebb6;
    margin-top: 0%;
    height: fit-content;
    padding: 2%;
    font-size: 20px;
    font-weight: 200;

}
.boxconva{
    border-color: #443d3dd1;
    border-bottom:.1rem solid #fff"
}

.com_btn{
    background-color:#c40d0d;
    color: white;
    font-size: 20px;
    padding:5px 30px 10px 30px;
}

.layer1>.scrollbox{
    width:120%;}

.scrollbox{
    background-color: #864a4ab6;
    height:450px;
    margin-left: 60px;
    margin-top: 80px;
    overflow-x: hidden;
    overflow-y: auto;
    margin-bottom: 30px;
}
    </style>

</head>

	<body style="background-color:white;background-size:cover">
	<div  style="background-color:#c40d0d;height:70px;padding-top:5px;border-bottom:.1rem solid #fff">
	<center>
	  <h2 style="color:white">PTU portal for higher studies</h2></center>
</div>

<div id="prof" style="background-color:rgb(95, 93, 93)" >
	<div>
		<div >
			<?php
				
					$number=$_GET['rn'];
				 	$con=mysqli_connect("localhost","root","","hsportal")or die("could not connect");
					$qry=mysqli_query($con,"SELECT * FROM `student_tbl` WHERE reg_id='$number'") or die("plz check the query");
				    
				    while ($row=mysqli_fetch_array($qry))
					 {
                        // session_start();
                        // $_SESSION["stu_mail"]=$mail;
                        // $_SESSION["stu_pass"]=$pass;
						$roll=$row[1];
						$name=$row[2];
                        $mail=$row[7];
                        $deprt=$row[4];
					}

			?>

			<br><br><br>
            
			<h2><?php echo $name?>'s profile</h2><br></div>
				
				<div>
					<img src="../img/prf.png" width="100px" height="100px"><br><br>
					<h5 style="text-align:left;margin-left:50px;">Reg.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <?php echo ":  ".$roll ?></h5>
					<h5 style="text-align:left;margin-left:50px;">Department &nbsp&nbsp<?php echo ":  ".$deprt ?></h5>
					<h5 style="text-align:left;margin-left:50px;">email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <?php echo ":  ".$mail ?></h3>
				<br>
				<button type="button" class="btn btn-warning"><h4><a   href="ajaxcoursepage.php?rn=<?php echo $roll ?>" style="text-decoration: none; color: white; ">Select course</a></h4></button><br><br>
				<button type="button" class="btn btn-warning"><h4><a   href="schedule.php?rn=<?php echo $roll ?>" style="text-decoration: none; color: white; ">Schedule Timings</a></h4></button><br><br>
				<button type="button" class="btn btn-danger"><h4><a href="logout.php" style="text-decoration: none; color: white;">Logout</a></h4></button>
				
				</div>
</div></div></div>



            <div class="col-sm-9">
                <br>
                <h2 style="text-align:center;">SCHEDULE TIMING</h2>
                <br>
                <table class="w-100 table-elements table-three-tr" cellpadding="3">
                <tr class="table-tr-head table-three text-white">
                    <th>Course</th>
                    <th>Timming</th>
                    <th>Day</th>
                    <th>trainer</th>
                    </tr>
                    <?php  
                        $query="select * from timetable";
                        $run=mysqli_query($con,$query);
                        while($row=mysqli_fetch_array($run)) {
                        echo "<tr>";												
                        echo "<td>".$row["courseid"];
                        echo "<td>" .$row["time_from"]."<br>".$row["time_to"]."</td>";
                        echo "<td>".$row["day"]."</td>";
                        echo "<td>".$row["tr_name"]."</td>";
                        }
                    ?>
                </table>
            </div>

</body>
</html>
