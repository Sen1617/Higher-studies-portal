<?php

  include("config.php");

?>


<!DOCTYPE html>
<html>
<head>
  <title>Newuser</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    td{
      color:rgb(19, 18, 18);
    }
  </style>
</head>
<body style="background-image:url(../img/dashboardback.jpg); background-size: cover">
   <div id="user_logn">
  <center>
  <br><br>
<fieldset id="logn" style="background:#ffffff99;width:500px;margin-top:10px;height:580px;">
<p style="color:rgb(41, 41, 41); font-size:25px;">SIGN-UP</p>
    <form method="post" action="newreg.php"  autocomplete="off">
      <table id="tbl" cellpadding="5">
        <tr>
          <td >User Name</td>
          <td ><input type="Text" placeholder="enter your name" class="new" name="uname" required></td>
        </tr>
        <tr>
          <td>Register Number</td>
          <td><input type="text"  placeholder="enter your Reg_no" class="new" name="rollno" required></td>
        </tr>
        <tr>
          <td>Department</td>
          <td><select  class="new" name="depart" required>
              <option>Select your Department</option>
              <option>MCA</option>
              <option>ECE</option>
              <option>EEE</option>
              <option>ME</option>
              <option>M.tech</option>
          </select></td>
        </tr>
        <tr>
          <td >Address</td>
          <td ><input type="Text" placeholder="enter your location" class="new" name="loc" required></td>
        </tr>
        <tr>
          <td >Contact</td>
          <td ><input type="Text" placeholder="enter your contact" class="new" name="phno" required></td>
        </tr>
        <tr>
          <td>Email-ID</td>
          <td><input type="email"  placeholder="enter your email-id" class="new"  name="email" required></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="PassWord"  placeholder="enter your Password" class="new" name="pass1" required></td>
        </tr>
      <tr>
          <td>confirm Password</td>
          <td><input type="password"  placeholder="please confirm your password" class="new"  name="pass2" required></td>
        </tr>  </table>  
    <input type="submit" class="btn success" value="Submit" name="submit" >
      <input type="reset" class="btn danger" value="Reset" >
     <a style="color:rgb(5, 25, 112);" href="login.php" >Already Registered..! </a>  
</form>  
     <?php
    if(isset($_POST["submit"]))
    {
      $uname=$_POST["uname"];
      $rollno=$_POST["rollno"];
      $depart=$_POST["depart"];
      $addr=$_POST["loc"];
      $phnum=$_POST["phno"];
      $email=$_POST["email"];
      $pass1=$_POST["pass1"];
      $pass2=$_POST["pass2"];
        if($uname!==""&&$rollno!==""&&$depart!==""&&$addr!==""&&$phnum!==""&&$email!==""&&$pass1!==""&&$pass2!="")
        {
          if($pass1==$pass2)
          {
            $sql="INSERT INTO `student_tbl`(`reg_id`, `name`,`dept`,`address`, `contact`,`email_id`,`password`) 
            VALUES ('$rollno','$uname','$depart','$addr','$phnum','$email','$pass1')";
              if($con->query($sql))
              {
              header("location:login.php?mes=<p class='crt'>You Are Registered Successfully ...Please Login Here..</p>");
              }
              else
              {
              echo"<p class='err'>Error....!Try Again Later..!</p>";
              }

          }
          else
          {
            echo"<p class='err1'>Confirm password must be same..?</p>";
          }

        } 
        else
        {
          
        }
    }
    
    ?>
    <?php
if(isset($_POST['email'])== true && empty($_POST['email'])== false)
{
  $email=$_POST['email'];
  if(filter_var($email,FILTER_VALIDATE_EMAIL)==true)
  {
    
  }else
    {
      echo 'invalid email...';
    }
}
?>
</fieldset></center>
</div>
</body>
</html>