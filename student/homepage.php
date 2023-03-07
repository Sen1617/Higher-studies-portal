<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
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

	<body style="background-image:url(../img/dashback.jpg);background-size:cover">
	<div  style="background-color:#c40d0d;height:70px;padding-top:5px;border-bottom:.1rem solid #fff">
	<center>
	  <h2 style="color:white">PTU portal for higher studies</h2></center>
</div>

<div id="prof" style="background-color:rgb(95, 93, 93)" >
	<div>
		<div >
			<?php
				if(isset($_GET['mail']))
					{
					$mail=$_GET['mail'];
					$pass=$_GET['pass'];
				 	$con=mysqli_connect("localhost","root","","hsportal")or die("could not connect");
					$qry=mysqli_query($con,"SELECT * FROM `student_tbl` WHERE email_id='$mail'AND password='$pass'") or die("plz check the query");
				    if(mysqli_num_rows($qry)!=1)
					{
						header("location:login.php?mes=<p class='crt'>That Register number is not be found or wrong pssword <br> Plz Login Here</p>");
					}
				    while ($row=mysqli_fetch_array($qry))
					 {
                        // session_start();
                        // $_SESSION["stu_mail"]=$mail;
                        // $_SESSION["stu_pass"]=$pass;
						$roll=$row[1];
						$name=$row[2];
                        $deprt=$row[4];
					}

			?>
<?php
		}
		else 
			{
			header("location:login.php?mes=<p class='crt'>.Plz Login Here..</p>");
			
		}
?>
			<br><br><br>
            
			<h2><?php echo $name?>'s profile</h2><br></div>
				<table>
				<div>
					<img src="../img/prf.png" width="100px" height="100px"><br><br>
					<tr><td>Reg. &nbsp</td><td><?php echo ":  ".$roll ?></td></tr>
					<tr><td>Department &nbsp</td><td><?php echo ":  ".$deprt ?></td></tr>
					<tr><td>email &nbsp</td><td><?php echo ":  ".$mail ?></td></tr>
				</table><br>
				<button type="button" class="btn btn-warning"><a   href="ajaxcoursepage.php?rn=<?php echo $roll ?>" style="text-decoration: none; color: white; ">Select course</a></button><br><br>
				<button type="button" class="btn btn-warning"><a   href="schedule.php?rn=<?php echo $roll ?>" style="text-decoration: none; color: white; ">Schedule Timings</a></button><br><br>
				<button type="button" class="btn btn-danger"><a href="logout.php" style="text-decoration: none; color: white;">Logout</a></button>
				</table>
				</div>
</div></div></div>



<div class="col-sm-6">
<div id="ser">
    <div class="layer1">
        <div class="scrollbox s1">
            <div class="boxhead"><p style="color:white"class="reglink">Notice Updates</p></div>
                <div class="boxcontent">
                    <div class="boxconva">
                        <?php 
                            $con=mysqli_connect("localhost","root","","hsportal")or die("could not connect");
                            $qry=mysqli_query($con,"SELECT * FROM `notify` ORDER BY id DESC");
                            if(mysqli_num_rows($qry)<1)
                            {
                                echo("No new updates");
                            }
                            while ($row=mysqli_fetch_array($qry))
                            {
                                $content=$row[2];
                                $date=$row[3];
                                $links=$row[4];
                                ?>
                                <div style="border-bottom:.1rem solid rgb(95, 93, 93)   "><p><?php echo $content." - ".$date;?> </p><br/><p style="color: #0000FF"> <?php echo $links;?></p><br/></div>
                                <?php 
                            }
                        ?>
                    </div><br/>
                </div>
            </div>
    </div>
</div></div>
 </body>
</html>
