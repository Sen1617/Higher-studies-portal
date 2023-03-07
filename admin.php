<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
function pasuser(form)
 {
  if (form.id.value=="admin@pec.edu")
    { 
     if (form.pass.value=="admin")
      {              
        location="Admin/admin-index.php" 
      } 
      else
       {
        alert("Invalid Password")
       }
    } 
  else
    { 
     alert("Invalid UserID")
    }
  }
</script>

<body style="background-image: linear-gradient(rgba(180, 180, 180, 0.300),rgba(14,14,14,0.650)),url(img/back1.png);overflow-y:hidden;height: 680px;0hv;margin-top: 150px;">
  <center>
  <img style="-webkit-filter: drop-shadow(3px 3px 3px #3b3b3b);filter: drop-shadow(3px 3px 3px #3b3b3b);" src="img/ptusmalllogo.png" >
  <fieldset style="width:500px;height: 250px; background:#ffffff99;">
  <p style="color:rgb(41, 41, 41); font-size:25px;">Verify Admin</p>
    <table cellpadding="12">
      <tr><td><b>Admin_ID:</b></td><td>
      <form name="login" autocomplete="off">
        <input name="id" type="text" class="id"></td></tr>
          <tr><td><b>Password:</b></td><td>
          <input name="pass" type="password" class="pwd"></td></tr>
          <tr><td>
            <center><input type="button" value="Login" onClick="pasuser(this.form)" class="btn success"></center></td>
          <td><center><input type="Reset" class="btn danger"></center></td>
      </form>
      </td></tr>
    </table></fieldset>
  </center> 
</body>
</html>