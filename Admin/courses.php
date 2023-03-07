<!---------------- Session starts form here ----------------------->
<?php  
		require_once "config.php";
	?>
<!---------------- Session Ends form here ------------------------>

<!-- --------------------------------add courses------------------------------------- -->
<?php  
	if (isset($_POST['sub'])) {
		$cname=$_POST['cname'];
		$dept=$_POST['department'];
		$desc=$_POST['description'];
		$cid=$_POST['cid'];
		$cfull=$_POST['cfull'];

		$query="insert into course_tbl(dept,coursename,descp,cid,fullform)
		values('$dept','$cname','$desc','$cid','$cfull')";
		$run=mysqli_query($con,$query);
		if ($run) {
			echo "Added successfully";
		}
		else{
			echo "Failed to add";
		}
	}
?>

<!-- --------------------------------End Php------------------------------------- -->


<!doctype html>
<html lang="en">
	<head>
		<title>Admin - Courses</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>
		<?php include('../common/admin-sidebar.php') ?>  

		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="bar-margin text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<h4>Course Management System </h4>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form action="courses.php" method="post">
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Course code: </label>
										<input type="text" name="cname" class="form-control" required placeholder="Enter Course code">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Course ID:</label>
										<input type="text" name="cid" class="form-control" required placeholder="Enter Course id">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Course Name:</label>
										<input type="text" name="cfull" class="form-control" required placeholder="Enter Course Name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Description:</label>
										<input type="textarea" rows="2" name="description" class="form-control" required placeholder="Write description">
									</div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
									<label for="exampleInputEmail1">Department: </label>
									<select class="browser-default custom-select" name="department">
										<option >Select Department</option>
										<option value="MCA">MCA</option>;
										<option value="M.tech">M.tech</option>
										<option value="MBA">MBA</option>
										<option value="ME">ME</option>
										<option value="CE">CE</option>
									</select>
									</div>
								</div>
							</div>
							<div class="row w-100">
								<div class="col-md-12">
									<input type="submit" name="sub" value="Add Course" class=" btn btn-primary ml-auto">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-11 ml-2">
						<section class="mt-3">
							<table class="w-100 table-elements mb-5 table-three-tr" cellpadding="3">
								<tr class="table-tr-head table-three text-white">
									<th>Sr.No</th>
									<th>Course Name</th>
									<th>Department</th>
									<th>Description</th>
									<th>Action</th>
								</tr>
								<?php
									$sr=1;
									$query="select * from course_tbl ORDER BY id DESC";
									$run=mysqli_query($con,$query);
									while($row=mysqli_fetch_array($run)) {
									echo	"<tr>";
									echo	"<td>".$sr++."</td>";
									echo	"<td>".$row['coursename']."</td>";
									echo	"<td>".$row['dept']."</td>";
									echo	"<td>".$row['descp']."</td>";
									echo	"<td width='20'><a class='btn btn-danger' href=delete-function.php?course_code=".$row['id'].">Delete</a></td>";
									echo	"</tr>";
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
