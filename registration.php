<?php
session_start();
 require('dbconfig.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
}
else
{

//encrypt your password
$pass=md5($p);

$query="insert into user values('', '$n','$e','$pass')";
mysqli_query($conn,$query);

$err="<font color='blue'><h3 align='center'>Registration successfull !!<h3></font>";

}
}

?>
<html>
<title>Kfry Registration</title>
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
<body>

  <center>
    <h1>KFry Feedback System</h1>
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered" style="margin-bottom:50px">
<caption><h2 align="center">Registration Form</h2></caption>
<Tr>
<Td colspan="2"><?php 

echo @$err;?></Td>
</Tr>

    <tr>
      <td>Enter Your name:</td>
      <Td><input  type="text" name="n" class="form-control" required/></td>
    </tr>
    <tr>
      <td>Enter Your email: </td>
      <Td><input type="email" name="e" class="form-control" required/></td>
    </tr>

    <tr>
      <td>Enter Your Password: </td>
      <Td><input type="password" name="p" class="form-control" required/></td>
    </tr>
  </td>
</tr>

<tr>

<Td colspan="2" align="center">
<input type="submit" value="Save" class="btn" name="save" id="save"/>
<input type="reset" value="Reset" class="btn"/>
<p>Registered customer? Please
<a href="login.php">Login</a>
</p>
  </td>
</tr>
</table>
</form>
</center>
</body>
</html>
