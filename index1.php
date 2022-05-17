<!DOCTYPE html>
<html>
<head>
<title>VIDEO UPLOADS</title>
<style>
body{
	background-image: url("fav.jpg");
  	background-repeat: no-repeat; 
}
</style>
</head>
<body>
<h1><center><span style="text-align:center;
	color:#F1C40F;
	font-family: Century Gothic;
	font-size:50px;
	font-weight:normal;
	background-color:#00203FFF;
	padding:0% 0%;
	margin: 0% 0%;">Upload Your Video Here:</span></center></h1>
<center>
<form method = "POST" action="index1.php" enctype="multipart/form-data">
<div style="padding:5%;margin:5%;border:5px solid #FFC300;width:18%;background-color:#042B47;">
<input type="file" name="file" style="font-size:20px;color:#FFC300;"><br>
<br>
<br>

<input type="submit" name="upload" value="Upload" style="font-size:20px;"><br><br><br>

<a href="http://localhost/zenith/e%20Learning/" style="font-size:20px;color:#FFC300;text-decoration:none;">HOME</a>
</div></center>
</form>
</body>
</html>

<div style="text-align:center;
	color:#FFC300;
	background-color:#042B47;
	padding:0% 0%;
	margin: 0% 0%;">
<?php
include('db1.php');
if(isset($_POST['upload']))
{
	$name=$_FILES['file']['name'];
	$tmp=$_FILES['file']['tmp_name'];
	move_uploaded_file($tmp,"videos".$name);
	$sql="INSERT INTO videos (name)  values ('$name')";
	$res=mysqli_query($con,$sql);
	if($res==1){
		echo "<h1>Inserted Successfully</h1>";
	}
}
?>
</div>