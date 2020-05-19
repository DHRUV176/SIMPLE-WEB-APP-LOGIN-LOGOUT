<?php 
session_start();
include("connection.php");
error_reporting(0);
 ?>

<html>
<head>
	<title>SIGN IN</title>
</head>

<style>

html{
  margin: 0;
  padding: 0;
}

body{
  margin: 0;
  padding: 0;
  text-align: center;
  /* background: linear-gradient(50deg, #f9eeee, #d18e9f); */
  background-image: url("a4.jpg");
  height: 100vh;
}
.container{
  /* border: 1px solid red; */
  text-align: center;
  display: inline-block;
  padding: 20px;
  width: 30%;
  margin-top: 40px;
  background: linear-gradient(-100deg, #f2527d, #ffe2a4);
  box-shadow: 0px 0px 7px 4px skyblue;
}
h1{
  font-family: arial;
  letter-spacing: 8px;
  border: 1px solid red;
  padding: 10px;
  color: #fff;
}
label{
  float: left;
  margin-top: 20px;
  font-weight: bold;
  font-size: 18px;
  letter-spacing: 5px;
  font-family: arial;
  color:#ff0fe3;
}
input{
  border: 1px solid blue;
  width: 90%;
  padding: 10px;
  float: left;
  margin-top: 5px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px 0.2px black;
}
input:hover{
  border: 1px solid blue;
  width: 90%;
  padding: 10px;
  float: left;
  margin-top: 5px;
  border-radius: 10px;
  box-shadow: 0px 0px 5px 0.2px blue;
}

.circle{
  width: 100px;
  height: 100px;
  border-radius: 100%;
  margin-top: -70px;
  /* background-color: red; */
  background-image: url("a4.jpg");
}
#btn{
  margin-top: 20px;
  width: 30%;
  float: left;
  cursor: pointer;
  background: linear-gradient(-100deg, #ff8e47, #ff2ced);
  font-weight: bold;
  letter-spacing: 1px;
  color: #fff;
}

#btn:hover{
  background: linear-gradient(-100deg, #ff2ced, #ff8e47);
}

#link{
  float: right;
  margin-top: 30px;
  padding-right: 20px; 
  color: #fff;
}

</style>

<body>

<link rel="stylesheet" type="text/css" href="login.css">
	
<div class="container">
<form action="" method="POST">
	 <center><div class="circle" ><img src=""></div></center>
	<h1>SIGN IN</h1>

	 <label>USER NAME</label>   
	 <input type="text" name="username" value="">

     <label>PASSWORD</label>
	 <input type="password" name="password" value="">

	<input type="submit" id="btn" name="signin" value="SIGN IN">

	 <a href="signup.php" id="link">Create a New Account</a>
</form>
</div>


</body>
</html>

<?php 

if ($_POST['signin']) 
{
    $username = $_POST['username'];
    $password = $_POST['password'];

		$query = "SELECT * FROM users WHERE username='$username' && password='$password' ";

    $data = mysqli_query($conn,$query);

   $total = mysqli_num_rows($data);

          if ($total) //$total == 1
          {
	         // echo "DATABASE SUCCESSFYLLY INSERT...";
            $_SESSION['user_name'] = $username;
            header('location:welcome.php');
           }

	else
	{
		echo "<font color='red'>Login Unccessful !!!";
	}
}

 ?>