<?php
session_start();
 require('dbconfig.php');
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";
	}
	else
	{
$pass=md5($p);

$sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['user']=$e;
header('location:give_feedback.php');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<html>
<title>Kfry Login</title>
<head>
<style>
body{
  font-family: sans-serif;
}
h1{
  background-color: black;
  padding: 10px;
  color: white;
  font-family: helvetica;
}
a{
  color: blue;
}
.btn{
  border: none;
  cursor: pointer;
  padding: 5px;
  border-radius: 4px;
}
#save{
  background-color: green;
  color: white;
}

</style>
</head>
<center>
  <body>

<h1>KFry Feedback System</h1>
<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

<form method="post">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><h2>Login Form</h2></div>
	</div>

	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>

	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your Email</div>
		<div class="col-sm-5">
		<input type="email" name="e" class="form-control"/></div>
	</div>

	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your Password</div>
		<div class="col-sm-5">
		<input type="password" name="p" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn btn-info" id="save"/>
    <p>New customer? Please
    <a href="index.php">Sign Up</a>
  </p>

		</div>
	</div>
</form>
</div>
</div>
  </body>
</center>
</html>
