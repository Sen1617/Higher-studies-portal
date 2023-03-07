<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style type="text/css"?<?php echo time(); ?>>
body{
	background-image: linear-gradient(rgba(180, 180, 180, 0.300),rgba(14,14,14,0.650)),url(img/backwall.jpg);
	background-size: cover;
	height:100vh;
	font-family:sans-serif;
}
img{
  -webkit-filter: drop-shadow(3px 3px 3px #3b3b3b);
  filter: drop-shadow(3px 3px 3px #3b3b3b);
}
/* #wlink a{
	text-decoration: none;
	text-shadow: 2px 2px 3px #1a1a1ab0;
	color:#56f4fa;
	padding:10px;
}*/
#wlink a:hover{
	cursor: pointer;
  	/* border-top-right-radius:15px;  
  	border-top-left-radius:3px;  
  	border-bottom-left-radius:15px;
  	border-bottom-right-radius:3px; */
	background-position: bottom left;
  	color:black;
	text-shadow: none;	
	font-weight:  500;
}
h2{
	font-weight:600;
	text-shadow: 2px 2px 3px #1a1a1ab0;
	color:white;
}
#wlink a{
  position: relative;
  padding: 1em 1.5em;
  border: none;
  cursor: pointer;
  outline: none;
  font-size: 18px;
  margin: 1em 0.8em; 
  text-decoration: none;
  text-shadow: 2px 2px 3px #1a1a1ab0;
  color:white;
  background: linear-gradient(to top, #ffffffd0 50%, transparent 50%);
  background-size: 100% 200%;
  background-position: top left;
  transition: all .7s ease-out;
}

  .type2 {
    color: #16a085; }
    .type2.type2:after, 
	.type2.type2:before {
      content: '';
      display: block;
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      height: 2px;
      background-color: #fff;
      transition: all 0.3s ease;
      transform: scale(1); }
    .type2.type2:hover:before ,
	.type2.type2:hover:after {
      top: 0;
	  
	  background-color: #fff;
       }
/* #wlink
{
	color: white; 
	font-family:arial,serif; 
} */

</style>
<body>
<center>
<br><br>
<br><br><br><br><br>
<img src="img/ptusmalllogo.png"><h2>Puducherry Technological University <br> Higher Studies Portal</h2><br>
<div id="wlink"><h4><a class="type2" href="student/login.php" >Student login</a>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp<a class="type2" href="admin.php">Admin login</a></h4></div>
</body>
</html>