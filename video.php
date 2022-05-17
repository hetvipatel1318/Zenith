<!DOCTYPE html>
<html>
<head>
<title> Video </title>
</head>
<body style="background-image: url('fav.jpg');background-repeat:no-repeat;">
<center>
<div style="color:#F1C40F;
	font-family: Century Gothic;
	font-size:50px;
	font-weight:normal;
	background-color:#00203FFF;font-size:50px;width:25%;"> Videos: </div>
<div style="padding:5%;margin:5%;border:5px solid #FFC300;width:18%;background-color:#042B47;color:#FFC300;font-size:25px;">
<?php
include('db1.php');
$sql="select * from videos";
$res=mysqli_query($con,$sql);
echo "The Videos are:";

while($row=mysqli_fetch_assoc($res)){
$id=$row['id'];
$name=$row['name'];
echo "<h4><a href='watch.php?id=$id'>".$name."</a></h4>";

}

?>
</div>
<center>
</body>
</html>