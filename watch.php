<!DOCTYPE html>
<html>
<head>
<title> Watch Videos </title>
</head>
<body style="background-image: url('fav.jpg');background-repeat:no-repeat;">
<center>
<div style="color:#F1C40F;
	font-family: Century Gothic;
	font-size:50px;
	font-weight:normal;
	background-color:#00203FFF;font-size:43px;width:25%;">Course Videos:</div>
<div style="float:left;padding:2%;margin:2%;border:5px solid #FFC300;background-color:#042B47;color:#FFC300;">
<a style="float:left;text-decoration:none;color:#FFC300;" href="http://localhost/zenith/e%20Learning/">HOME</a></div>

<div style="padding:5%;margin:5%;border:5px solid #FFC300;background-color:#042B47;color:#FFC300;width:50%;">

<?php
include('db1.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="select name from videos where id='$id'";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
	$name=$row['name'];
	echo "<h1>Currently You Are Watching ".$name."</h1>";
	?>
	<video width="615" height="315" controls>
	<source  src="sample-mp4-file.mp4" type="video/mp4">
	</video>
	<?php
}
	?>
</div>	
</center>	
</body>
</html>