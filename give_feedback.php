<?php
session_start();
 require('dbconfig.php');
extract($_POST);
if(isset($sub))
{
$user=$_SESSION['user'];

$sql=mysqli_query($conn,"select * from feedback where customer_id='$user'");
$r=mysqli_num_rows($sql);

if($r==true)
{
echo "<h2 style='color:red'>You already given feedback</h2>";
}
else
{
$query="insert into feedback values('','$user','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7',now())";

mysqli_query($conn,$query);

echo "<h2 style='color:green'>Thank you </h2>";
}
}

?>
<html>
<title>Kfry Feedback</title>
<head>
<style>
body{
  font-family: sans-serif;
  background-color: black;
}
button{
  border: none;
  cursor: pointer;
  padding: 5px;
  border-radius: 4px;
}
fieldset{
  background-color: white;
  color: black;
}
</style>
</head>
<body>
<form method="post">
<center><h2 style="color:white;">Kfry Feedback Form</h2>
</center>


<fieldset>
<h3 id="01">Answer question below:</h3>
<script>
var myElement = document.getElementById("01");
myElement.textContent = "Please give your answer about the following question by circling the given grade on the scale:";
</script>

<?php
$grade = array("Strongly Agree 5", "Agree 4", "Neutral 5", "Disagree 2", "Strongly Disagree 1");
?>

<button type="button" style="font-size:7pt;color:white;background-color:green;"><?php echo json_encode($grade[0]);?></button>
<button type="button" style="font-size:7pt;color:white;background-color:Brown;"><?php echo json_encode($grade[1]);?></button>
<button type="button" style="font-size:7pt;color:white;background-color:blue;"><?php echo json_encode($grade[2]);?></button>
<button type="button" style="font-size:7pt;color:white;background-color:Black"><?php echo json_encode($grade[3]);?></button>
<button type="button" style="font-size:7pt;color:white;background-color:red;"><?php echo json_encode($grade[4]);?></button>
<br>

<h3>Survey</h3>
<table class="table table-bordered">
<tr>
<td><b>1:</b> Quality of food:</td>
<td><input type="radio" name="quest1" value="5" required>5
  <input type="radio" name="quest1" value="4">4
  <input type="radio" name="quest1" value="3">3
<input type="radio" name=" quest1" value="2">2
<input type="radio" name="quest1" value="1">1</td>
</tr>

<tr>
<td><b>2:</b>Portion size:</td>
<td><input type="radio" name="quest2" value="5" required>5
  <input type="radio" name="quest2" value="4">4
  <input type="radio" name="quest2" value="3">3
<input type="radio" name=" quest2" value="2">2
<input type="radio" name="quest2" value="1">1</td>
</tr>

<tr>
<td>
<b>3:</b>Ease of ordering:</td>
<td>
<input type="radio" name="quest3" value="5" required>5
  <input type="radio" name="quest3" value="4">4
  <input type="radio" name="quest3" value="3">3
<input type="radio" name="quest3" value="2">2
<input type="radio" name="quest3" value="1">1</td>
</tr>

<tr>
<td>
<b>4:</b>Service:</td>
<td>
<input type="radio" name="quest4" value="5" required>5
  <input type="radio" name="quest4" value="4">4
  <input type="radio" name="quest4" value="3">3
<input type="radio" name="quest4" value="2">2
<input type="radio" name="quest4" value="1">1</td>
</tr>

<tr>
<td>
<b>5:</b>Cleanliness:</td>
<td>
<input type="radio" name="quest5" value="5" required>5
  <input type="radio" name="quest5" value="4">4
  <input type="radio" name="quest5" value="3">3
<input type="radio" name="quest5" value="2">2
<input type="radio" name="quest5" value="1">1</td>
</tr>

<tr>
<td>
<b>6:</b>Overall value:</td>
<td>
<input type="radio" name="quest6" value="5" required>5
  <input type="radio" name="quest6" value="4">4
  <input type="radio" name="quest6" value="3">3
<input type="radio" name="quest6" value="2">2
<input type="radio" name="quest6" value="1">1</td>
</tr>
</table>

<b> 7:</b>Comments:<br><br>
<textarea name="quest7" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">
</textarea>

<p><button type="submit" style="font-size:10pt;color:white;background-color:green;padding:7px" name="sub">Submit</button></p>

</form>
</fieldset>

<!--<a href="transport.html"><p align="right"><button type="Button"style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Next</button></p></a>
<a href="About.php"><p align="right"><button type="Button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Back</button></p></a>-->

</div><!--close content_item-->
      </div><!--close content-->
	</div><!--close site_content-->
    </div><!--close main-->
  </form>
</center>
</body>
</html>
