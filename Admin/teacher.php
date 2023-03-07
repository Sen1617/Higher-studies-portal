<!---------------- Session starts form here ----------------------->
<?php  
	require_once "config.php";
	?>
<!---------------- Session Ends form here ------------------------>

<!--*********************** PHP code starts from here for data insertion into database ******************************* -->
<?php  
 	if (isset($_POST['btn_save'])) {

 		$name=$_POST["name"];
		 $desig=$_POST["desg"];
		 $email=$_POST["mail"];
		 $phno=$_POST["mobno"];

 		$query="Insert into trainer_tbl(tname,desig,email_id,phno) values('$name','$desig','$email','$phno')";
 		$run=mysqli_query($con, $query);
 		if ($run) {
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
		<title>Admin - Register Teacher</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>
		<?php include('../common/admin-sidebar.php') ?>
		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<div class="d-flex">
						<h4 class="mr-5">Manage System</h4>
						<button type="button" class="btn btn-primary ml-5" data-toggle="modal" data-target=".bd-example-modal-lg">Add Teacher</button>
					</div>
				</div>
				<div class="row w-100">
					<div class=" col-lg-6 col-md-6 col-sm-12 mt-1 ">
						<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header bg-info text-white">
										<h4 class="modal-title text-center">Add New Teacher</h4>
									</div>
									<div class="modal-body">
										<form action="teacher.php" method="post">
											<div class="row mt-2">
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Name: </label>
														<input type="text" name="name" class="form-control" required="" placeholder="Enter Name">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Designation: </label>
														<input type="text" name="desg" class="form-control" required="" placeholder="Enter the Designation">
													</div>
												</div>
											</div>
											
												<div class="row mt-2">
													<div class="col-md-4">
														<div class="form-group">
															<label for="exampleInputEmail1">Email-Id: </label>
															<input type="text" name="mail" class="form-control" required="" placeholder="Enter E-mail id">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label for="exampleInputEmail1">Contact: </label>
															<input type="text" name="mobno" class="form-control" required="" placeholder="Mobile Number">
														</div>
													</div>
												</div>
											
											<div class="modal-footer">
												<input type="submit" class="btn btn-primary" name="btn_save" value="Save Data">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row w-100">
					<div class="col-md-12 ml-2">
						<section class="mt-3">
							<table class="w-100 table-elements mb-5 table-three-tr" cellpadding="10">
								<tr class="table-tr-head table-three text-white">
									
									<th>Trainer Name</th>
									<th>Designation</th>
									<th>Email-Id</th>
									<th>Mobile No</th>
									<th>operation</th>

								</tr>
								<?php 
								$query="select * from trainer_tbl";
								$run=mysqli_query($con,$query);
								while($row=mysqli_fetch_array($run)) {
									echo "<tr>";
									echo "<td>".$row["tname"]."</td>";
									echo "<td>".$row["desig"]."</td>";
									echo "<td>".$row["email_id"]."</td>";
									echo "<td>".$row["phno"]."</td>";
									echo "<td width='150'> <a class='btn btn-danger' href=delete-function.php?teacher_id=".$row['id'].">Delete</a></td>";
									echo "</tr>";
								}
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


