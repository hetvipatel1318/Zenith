<?php
	// User Authentication....
	
	$uEmail=$_POST['uEmail'];
	$uPass=$_POST['pass'];
	$mdPass=md5($uPass);
	//echo $mdPass;
	
	$con=mysqli_connect("localhost","root","","zenith_elearning") or die("Connection error...");
	
	$query = "SELECT uName,email 
				from useraccounts where 
				email='$uEmail' 
				and 
				uPass='$mdPass'";
	
	
	$result=mysqli_query($con,$query);
	
	//$row = mysqli_fetch_object($result);
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		header("location:http://localhost/zenith/coursepurchase.php?user=".$row['uName']."&email=".$row['email']."");
	}
	else
		echo "Invalid User....";
	
	
	
	
	
?>