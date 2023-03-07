<?php  
	require_once "config.php";
?>

<!-- --------------------------------Delete Student------------------------------------- -->

	<?php 
	if (isset($_GET['roll_no'])) {
		$roll_no=$_GET['roll_no'];
		$query1="delete from student_tbl where reg_id='$roll_no'";
		$run1=mysqli_query($con,$query1);
		if ($run1) {
			header('Location: student.php');
		}
		else{
			echo "Record not deleted";
		}
	}
	?>
<!-- --------------------------------Delete Course------------------------------------- -->
<?php 
	if (isset($_GET['course_code'])) {
		$course_code=$_GET['course_code'];
		$query2="delete from course_tbl where id='$course_code'";
		$run2=mysqli_query($con,$query2);
		if ($run2) {
			header('Location: courses.php');
		}
		else{
			echo "Record not deleted";
		}
	}
?>
<!-- --------------------------------Delete notification------------------------------------- -->
<?php 
	if (isset($_GET['noti_code'])) {
		$noti_code=$_GET['noti_code'];
		$query3="delete from notify where id='$noti_code'";
		$run3=mysqli_query($con,$query3);
		if ($run3) {
			header('Location: notification.php');
		}
		else{
			echo "Removed Notification";
		}
	}
?>
<!-- --------------------------------Delete Trainer------------------------------------- -->
<?php 
	if (isset($_GET['teacher_id'])) {
		$teacher_id=$_GET['teacher_id'];
		$query3="delete from trainer_tbl where id='$teacher_id'";
		$run3=mysqli_query($con,$query3);
		if ($run3) {
			header('Location: teacher.php');
		}
		else{
			echo "Record not deleted";
		}
	}
?>
