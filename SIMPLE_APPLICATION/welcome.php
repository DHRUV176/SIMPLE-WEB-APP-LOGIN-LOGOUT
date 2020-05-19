<?php

session_start();
include("connection.php");
error_reporting(0);
//echo "Welcome ".$_SESSION['user_name'];
$userprifile = $_SESSION['user_name'];

if ($userprifile==true) {
	
}
else
{
	header('location:signin.php');
}
//echo $result['picsource'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>WELCOME</title>
</head>

<style>
	a{
		background: linear-gradient(-100deg, #ff8e47, #ff2ced);
		padding: 10px;
		letter-spacing: 5px;
		text-decoration: none;
		 font-weight: bold;
       color: #fff;
       box-shadow: 0px 0px 7px 4px skyblue;
	}
	a:hover{
  background: linear-gradient(-100deg, #ff2ced, #ff8e47);
}
</style>

<body>

<center>
<h1><?php echo "Welcome ".$_SESSION['user_name']; ?></h1>
<br><br>
<h3> !!! LOGIN SUCCESSFUL !!! </h3>
<br>
<br>
<a href="logout.php">LOGOUT</a>

<h4>
<li>This <i>Simple Web Application</i></li>
<li>Not Protected for <b>SQL INJECTION</b></li>
</h4>
</center>
</body>
</html>