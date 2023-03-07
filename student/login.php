
<?php
  session_start();
  include("config.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.crt,
.txt
{
	color: rgb(255, 255, 255);
	font-weight: 400;
}
.err
{
	color: rgb(211, 50, 50);
}
.err1
{
	color: #ff33bb;
}
	</style>
</head>
<body style="background-image:url(../img/dashboardback.jpg);background-size: cover">
<div id="user_log">
	<center>
	<br><br>
	<p class="txt"><?php
		if(isset($_GET["mes"]))
		echo $_GET["mes"];
	?></p>
	
	
<fieldset id="log" style="background:#ffffff99;">
  <p style="color:rgb(41, 41, 41); font-size:25px;">SIGN-IN</p>


    <form method="GET" action="homepage.php"  autocomplete="off">
      <table id="tbl" cellpadding="5" cellspacing="20">
        <tr>
          <td style="color:black;">Email Id</td>
          <td ><input type="Text" placeholder="enter your pec mail id" class="new" name="mail" required></td>
        </tr>
        <tr>
          <td style="color:black;">Password</td>
          <td><input type="Password" placeholder="enter your password" class="new" name="pass" required></td>
        </tr>
      </table>
        <input type="submit" class="btn info" value="sign-in" name="submit" required>
       <input type="reset" class="btn danger" value="Clear" ><br><br>
        <a  style="color:rgb(211, 50, 50);" href="newreg.php">New User here!</a>
    </form>


</fieldset></center>



<?php
	if(isset($_POST["submit"])) 
	{
		$email=$_POST["mail"];
		$pass=$_POST["pass"];
		if($email!=""&&$pass!="")
		{
			$sql="SELECT `email_id` FROM `student_tbl` WHERE email_id='$email' AND password='$pass'";
			$result=$con->query($sql);
			//print_r($result);
			if($result->num_rows==1)
			{   session_start();
				echo ("session started");
				$_SESSION["stu_mail"]=$email;
				$_SESSION["stu_pass"]=$pass;
				header("location:homepage.php");
				header("location:comp.php");
			}
			else
			{
		echo "<center><p class='err'>Invalid Rollno or Password</p></center>";
					
			}
		}
		echo "<center><p class='err1'>Please Enter the Correct details</pstyle=></center>";

	}
	else 
	{
	echo"<center><p class='crt'>Please fill the details for complete Access </pstyle=></center>";
	}
?>
</div>
</body>
</html>