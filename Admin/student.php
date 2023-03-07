<!---------------- Session starts form here ----------------------->
<?php  
		require_once "config.php";
	?>

<?php  
 	if (isset($_POST['btn_save'])) {

		$regid= $_POST["regno"];
		$name= $_POST["sname"];
		$dept= $_POST["depart"];
		$addr= $_POST["address"];
		$cont= $_POST["contact"];
		$email= $_POST["mail"];
		$pass1= $_POST["passsword"];

 		$query="Insert into student_tbl(reg_id,name,dept,address,contact,email_id,password) 
		values('$regid','$name','$dept','$addr','$cont','$email','$pass1')";
 		$run=mysqli_query($con, $query);
 		if ($run) {
 			echo "Your Data has been submitted";
 		}
 		else {
 			echo "Your Data has not been submitted";
 		}
 		
 	}
?>


<?php  
	if (isset($_POST['btn_save2'])) {
		$course_code=$_POST['course_code'];

		$semester=$_POST['semester'];

		$roll_no=$_POST['roll_no'];

		$subject_code=$_POST['subject_code'];

		$date=date("d-m-y");

		$query3="insert into student_courses(course_code,semester,roll_no,subject_code,assign_date)values('$course_code','$semester','$roll_no','$subject_code','$date')";
		$run3=mysqli_query($con,$query3);
		if ($run3) {
 			echo "Your Data has been submitted";
 		}
 		else {
 			echo "Your Data has not been submitted";
 		}


	}
?>
<!--*********************** PHP code end from here for data insertion into database ******************************* -->
 
<!doctype html>
<html lang="en">
	<head>
		<title>Admin - Register Student</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>
		<?php include('../common/admin-sidebar.php') ?>
		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 w-100">
			<div class="sub-main">
				<div class="text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<div class="d-flex">
						<h4 class="mr-5">Manage Student</h4>
						<button type="button" class="btn btn-primary ml-5" data-toggle="modal" data-target=".bd-example-modal-lg">Add Student</button>
					</div>
				</div>
				<div class="col-md-2 pt-3 w-100">
  				    <!-- Large modal -->
					<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					   <div class="modal-dialog modal-lg">
						    <div class="modal-content">
							    <div class="modal-header bg-info text-white">
							        <h4 class="modal-title text-center">Add New Student</h4>
						        </div>
							    <div class="modal-body">
							        <form action="student.php" method="POST" >
										<div class="row mt-3">
											<div class="col-md-4">
											    <div class="form-group">
											        <label for="exampleInputEmail1">Name:*</label>
											        <input type="text" name="sname" class="form-control" required>
											    </div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
												    <label for="exampleInputEmail1">Register number:*</label>
												    <input type="text" name="regno" class="form-control">
											    </div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
												    <label for="exampleInputEmail1" required>department:*</label>
												    <input type="text" name="depart" class="form-control">
											    </div>
											</div>
								  		</div>
								  		<div class="row mt-2">
											<div class="col-md-4">
											    <div class="form-group">
											        <label for="exampleInputEmail1">address:</label>
											        <input type="text" name="address" class="form-control" required>
											    </div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
												    <label for="exampleInputEmail1">Contact:</label>
												    <input type="text" name="contact" class="form-control">
											    </div>
											</div>
								  		</div>
								  		<div class="row mt-2">
											<div class="col-md-4">
												<div class="form-group">
												    <label for="exampleInputEmail1">Email Id:*</label>
												    <input type="text" name="mail" class="form-control">
											    </div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
												    <label for="exampleInputEmail1">Password:*</label>
												    <input type="text" name="passsword" class="form-control">
											    </div>
											</div>
								  		</div>
								  		<div class="modal-footer">
						   		            <input type="submit" class="btn btn-primary" name="btn_save">
		      								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									    </div>
									</form>
						        </div>
						    </div>
					   </div>
					</div>
				</div>
				<div class="row w-100">
					<div class="col-md-12 ml-2">
						<section class="mt-3">
							<div class="row">
									
								
							<table class="w-100 table-elements mb-6 table-three-tr text-center" cellpadding="10">
								<tr class="table-tr-head table-three text-white">
									<th>Register.No</th>
									<th>Student Name</th>
									<th>Department</th>
									<th>Course</th>
									<th>Address</th>
									<th>Contact</th>
									<th>E-mail ID</th>
									<th colspan="1">Operations</th>
								</tr>
								<?php 
								$query="select * from student_tbl";
								$run=mysqli_query($con,$query);
								while($row=mysqli_fetch_array($run)) { 
								?>
									<tr>
										<td><?php echo $row["reg_id"] ?></td>
										<td><?php echo $row["name"] ?></td>
										<td><?php echo $row["dept"] ?></td>


										<?php 
											if($row["cour_id"]==''){
										?>
											<td><?php echo ("Not selected yet"); ?></td>
										<?php 
											}
											else{
										?>
											<td><?php echo $row["cour_id"] ?></td>
										<?php
											} ?>
										
										

										
										<td><?php echo $row["address"] ?></td>
										<td><?php echo $row["contact"] ?></td>
										<td><?php echo $row["email_id"] ?></td>
										
										<td width='170'> 
											<?php 
												echo "<a class='btn btn-danger' href=delete-function.php?roll_no=".$row['reg_id'].">Delete</a> "
											?>
										</td>
									</tr>
								<?php }
								?>
							</table>				
						</section>
					</div>
				</div>	 
			</div>
		</main>
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>