 
<?php  
	require_once "config.php";
	?>
<title>PTU-Admin</title>
	<?php include('../common/common-header.php') ?>
	<?php include('../common/admin-sidebar.php') ?>  
		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100 page-content-index">
			<div class="flex-wrap flex-md-no-wrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
				<h4>Admin Dashboard </h4>
			</div>
			<div class="row">
				<div class=" col-lg-6 col-md-12 col-sm-12 ">
					<div>
						<section class="mt-3">
							<div class="btn btn-block table-one text-light d-flex">
								<span class="font-weight-bold"><i class="fa fa-clock-o mr-2" aria-hidden="true"></i> Time Table</span>
								<a href="" class="ml-auto" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus text-light" aria-hidden="true"></i></a>
							</div>
							<div class="collapse show mt-2" id="collapseOne">
								<table class="w-100 table-elements table-one-tr"cellpadding="2">
									<tr class="pt-5 table-one text-white" style="height: 32px;">
										<th>Course</th>
										<th>Time</th>
										<th>Day</th>
										<th>trainer</th>
									</tr>
									<?php  
										$query="select * from timetable";
										$run=mysqli_query($con,$query);
										while($row=mysqli_fetch_array($run)) {
											echo "<tr>";
											echo "<td>".$row["courseid"]."</td>";
											echo "<td> start:".$row["time_from"]."<br>end:".$row["time_to"]."</td>";
											echo "<td>".$row["day"]."</td>";
											echo "<td>".$row["tr_name"]."</td>";
											echo "</tr>";
										}
									?>
								</table>
							</div>
						</section>
					</div>
				</div>
				</div>
				<div class=" col-lg-6 col-md-12 col-sm-12">
					<div>
						<section class="mt-3">
							<div class="btn btn-block table-two text-light d-flex">
								<span class="font-weight-bold"><i class="fa fa-list-alt mr-2" aria-hidden="true"></i> Course List</span>
								<a href="" class="ml-auto" data-toggle="collapse" data-target="#collapsetwo"><i class="fa fa-plus text-light" aria-hidden="true"></i></a>
								
							</div>
							<div class="collapse show mt-2" id="collapsetwo">
								<table class="w-100 table-elements table-two-tr"cellpadding="2">
									<tr class="pt-5 table-two text-white" style="height: 32px;">
										<th>Course Code</th>
										<th>Course Name</th>
									</tr>
									<?php
										$query="select coursename,fullform from course_tbl";
										$run=mysqli_query($con,$query);
										while($row=mysqli_fetch_array($run)) { ?>
											<tr>
												<td><?php echo $row['coursename'] ?></td>
												<td><?php echo $row['fullform'] ?></td>
											</tr>
										<?php } 
									?>
								</table>
							</div>
						</section>
					</div>
				</div>
				
		</main>
	
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>