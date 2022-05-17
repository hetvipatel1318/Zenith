<html>
<head>
<style>
h2{
	color:black;
	FONT-FAMILY:Bookman Old Style;
	background-color:#67D0DE;
	padding:10px;
	text-align:center;
}

input[type=submit] {
  background-color: #A2F0FB;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  width:200px;
}
</style>
</head>
<body style="background:url(oc.jpg);background-repeat:no-repeat;background-size:100% 100%;">
<?php
	$uName	=$_POST['uName'];
	$uEmail = $_POST['uEmail'];
	
	$con = mysqli_connect("localhost","root","","zenith_elearning") or die("Connection error...");
	
	
	
	
	$query="INSERT into certificate (email,uName) 
				values ('$uEmail','$uName')";
		
	mysqli_query($con,$query) or die("Insert query error...");
	
	
	//<?php
	$uName	=$_POST['uName'];
	$uEmail = $_POST['uEmail'];
	
	$con = mysqli_connect("localhost","root","","zenith_elearning") or die("Connection error...");
	
	
	
	
	$query="INSERT into certificate (email,uName) 
				values ('$uEmail','$uName')";
		
	mysqli_query($con,$query) or die("Insert query error...");
	
	
	//header("location:loginForm.php");
	
	echo "<h2>Congratulations!! Please confirm your email adress below to get certificate</h2>";
	
	
?>
<br>
<br>
<center>
<div style="background-color:#67D0DE; align:center; width:500px; padding:10px;">
<br>
<form action="certi.php" method="post">

<input style="height:35px;width:320px;" type="email" id="idEmail" name="uEmail" placeholder="Email" required>
<br><br>
<input type="submit" name="search" value="GET CERTIFICATE">
</form>
</div>
</center>
</body>
</html>