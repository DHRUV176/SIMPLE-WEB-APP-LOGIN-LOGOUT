<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simple_app";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn) {
  //echo "Connection Successfully !!!";
}
else
{
	//error function is show that what is your error
	die("Connection Failed Because : ".mysqli_connect_error()); 
}


?>
