<!---------------- Session starts form here ----------------------->
<?php  
		require_once "config.php";
	?>
<!---------------- Session Ends form here ------------------------>

<!-- --------------------------------add courses------------------------------------- -->
<?php  
	if (isset($_POST['noti'])) {
		$type=$_POST['type'];
		$date=$_POST['date'];
		$content=$_POST['content'];
		$link=$_POST['links'];
		

		$query="insert into notify(type,content,date,links)
		values('$type','$content','$date','$link')";
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
						<form action="notification.php" method="post">
							<div class="row mt-3">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Type: </label>
                                        <select class="browser-default custom-select" name="type">
                                            <option >Select Type</option>
                                            <option value="1">Notice</option>;
                                            <option value="2">Result</option>
                                            <option value="3">Exam dates</option>
                                        </select>
                                    </div>
                                </div>
								<div class="col-md-6 form-group">
									<div class="form-group">
										<label for="exampleInputEmail1">Date: </label>
										<input type="date" name="date" class="form-control" required placeholder="Select date">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Content:</label>
										<input type="text" name="content" class="form-control" required placeholder="Enter message">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">links:</label>
										<input type="text" name="links" class="form-control" required placeholder="Enter link">
									</div>
								</div>
                                
								</div>
							</div>
							
								
							<div class="row w-100">
								<div class="col-md-12">
									<input type="submit" name="noti" value="Update News" class=" btn btn-primary ml-auto">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-11 ml-2">
						<section class="mt-3">
							<table class="w-100 table-elements mb-3 table-three-tr" cellpadding="3">
								<tr class="table-tr-head table-three text-white">
									<th>Content</th>
									<th>Dates</th>
									<th>links</th>
									<th>Action</th>
								</tr>
								<?php
									$query="select * from notify ORDER BY id DESC";
									$run=mysqli_query($con,$query);
									while($row=mysqli_fetch_array($run)) {
									echo	"<tr>";
									
									echo	"<td>".$row['content']."</td>";
									echo	"<td>".$row['date']."</td>";
									if($row['links']==''){
										echo	"<td>not included</td>";
									}
									else{
										echo	"<td>".$row['links']."</td>";
									}
											



									echo	"<td width='20'><a class='btn btn-danger' href=delete-function.php?noti_code=".$row['id'].">Delete</a></td>";
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
