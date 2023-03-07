<?php  
		require_once "config.php";
		
	?>

<?php 
 
 	if (isset($_POST['btn_save'])) {

 		$course_code=$_POST["course_code"];

 		$trainer=$_POST["trname"];

 		$timing_from=$_POST["timing_from"];
 		
 		$timing_to=$_POST["timing_to"];
 		
 		$day=$_POST["day"];
 		
		
 		$query="insert into timetable(courseid,tr_name,time_from,time_to,day)
		values('$course_code','$trainer','$timing_from','$timing_to','$day')";
 		$run=mysqli_query($con, $query);
 		if ($run) {
 			echo "Your Data has been submitted";
 		}
 		else {
 			echo "Your Data has not been submitted";
 		}
 	}
?>

<!-- ---------------------------------------update time table------------------------------------------------ -->
<?php 
 
 	if (isset($_POST['btn_update'])) {

 		echo $course_code=$_POST["course_code"];

 		echo $trainer=$_POST["trname"];

 		echo $timing_from=$_POST["timing_from"];
 		
 		echo $timing_to=$_POST["timing_to"];
 		
 		echo $day=$_POST["day"];
 		

 		$query1="update timetable set courseid='$course_code',tr_name='$trainer',time_from='$timing_from',time_to='$timing_to',day='$day' where courseid='$course_code'";
 		$run1=mysqli_query($con, $query1);
 		if ($run1) {
 			echo "Your Data has been updated";
 		}
 		else {
 			echo "Your Data has not been updated";
 		}
 	}
?>
<!-- ---------------------------------------update time table------------------------------------------------ -->

<!--*********************** PHP code end from here for data insertion into database ******************************* -->

<!doctype html>
<html lang="en">
	<head>
		<title>Admin - Time Table</title>

	</head>
	<body>
		<?php include('../common/common-header.php') ?>
		<?php include('../common/admin-sidebar.php') ?>  

		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<div class="d-flex">
						<h4 class="mr-5">Time Table Management System </h4>
						<button type="button" class="btn btn-primary ml-5" data-toggle="modal" data-target=".bd-example-modal-lg">Add Time Table</button>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 ml-2">
						<section class=" mt-3">
							<div class="row">
								<div class="col-md-8"></div>
								<div class="col-md-3 ml-5 ">
									<div class="col-md-12 pt-3 ml-5">
										<!-- Large modal -->
										<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header bg-info text-white">
														<h4 class="modal-title text-center">Add Time Table</h4>
													</div>
													<div class="modal-body">
														<form action="time-table.php" method="post">
															<div class="row mt-3">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="exampleInputEmail1">Course Code: </label>
																		<select class="browser-default custom-select" name="course_code">
																			<option >Select Course</option>
																			<?php
																			$query="select coursename from course_tbl";
																			$run=mysqli_query($con,$query);
																			while($row=mysqli_fetch_array($run)) {
																			echo	"<option value=".$row['coursename'].">".$row['coursename']."</option>";
																			}
																		?>
																		</select>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="exampleInputEmail1">Timing From: </label>
																		<input type="time" name="timing_from" class="form-control">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="formp">
																		<label for="exampleInputPassword1">Timing To:</label>
																		<input type="time" name="timing_to" class="form-control">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="exampleInputEmail1">Lecture Day: </label>
																		<select class="browser-default custom-select" name="day">
																			<option >Select Week Day</option>
																			<option value="Monday">Monday</option>;
																			<option value="Tuesday">Tuesday</option>
																			<option value="Wednesday">Wednesday</option>
																			<option value="Thursday">Thursday</option>
																			<option value="Friday">Friday</option>
																		</select>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="formp">
																		<label for="exampleInputPassword1">Please Select Trainer:*</label>
																	<select class="browser-default custom-select" name="trname" required="">
																		<option >Select Trainer</option>
																		<?php
																			$query="select tname from trainer_tbl";
																			$run=mysqli_query($con,$query);
																			while($row=mysqli_fetch_array($run)) {
																			echo	"<option value=".$row['tname'].">".$row['tname']."</option>";
																			}
																		?>
																	</select>
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
							</div>
							<div class="row">
								<div class="col-md-10">
									<table class="w-100 table-elements table-three-tr" cellpadding="3">
										<tr class="table-tr-head table-three text-white">
											<td colspan="5" class="text-center text-white"><h4>Classes Time Table</h4></td>
											<td width="12" >											
											<div class="row">
												<div class="col-md-12">
													<div class="col-md-1 mt-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg1">Update</button>
													</div>
													<!-- Large modal -->
													<div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-lg">
															<div class="modal-content">
																<div class="modal-header bg-info text-white">
																	<h4 class="modal-title text-center">Update Time Table</h4>
																</div>
																<div class="modal-body">
																	<form action="time-table.php" method="post">
																		<div class="row mt-3">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label for="exampleInputEmail1">Course Code: </label>
																					<select class="browser-default custom-select" name="course_code">
																						<option >Select Course</option>
																						<?php
																						$query="select courseid from timetable";
																						$run=mysqli_query($con,$query);
																						while($row=mysqli_fetch_array($run)) {
																						echo	"<option value=".$row['courseid'].">".$row['courseid']."</option>";
																						}
																					?>
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label for="exampleInputEmail1">Timing From: </label>
																					<input type="time" name="timing_from" class="form-control">
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div class="formp">
																					<label for="exampleInputPassword1">Timing To:</label>
																					<input type="time" name="timing_to" class="form-control">
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label for="exampleInputEmail1">Lecture Day: </label>
																					<select class="browser-default custom-select" name="day">
																						<option >Select Week Day</option>
																						<option value="Monday">Monday</option>;
																						<option value="Tuesday">Tuesday</option>
																						<option value="Wednesday">Wednesday</option>
																						<option value="Thursday">Thursday</option>
																						<option value="Friday">Friday</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div class="formp">
																					<label for="exampleInputPassword1">Please Select Trainer:*</label>
																					<select class="browser-default custom-select" name="trname" required="">
																						<option >Select Trainer</option>
																						<?php
																							$query="select tname from trainer_tbl";
																							$run=mysqli_query($con,$query);
																							while($row=mysqli_fetch_array($run)) {
																							echo	"<option value=".$row['tname'].">".$row['tname']."</option>";
																							}
																						?>
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="modal-footer">
																			<input type="submit" class="btn btn-primary" name="btn_update" value="Update Data">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																		</div> 	
																	</form>
																</div>
															</div>
													</div>
													</div>
												</div>
											</td>
										</tr>
										<tr class="table-tr-head">
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
							</div>				
						</section>
					</div>
				</div>
			</div>
		</main>
	<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>

