<?php
	$uName	=$_POST['uName'];
	$uEmail = $_POST['uEmail'];
	$uPass	= $_POST['pass'];
	
	$mdPass= md5($uPass); 
	
	$uDoB	= $_POST['uDoB'];
	$uGender= $_POST['gender'];
	
	$con = mysqli_connect("localhost","root","","zenith_elearning") or die("Connection error...");
	
	
	
	
	$query="INSERT into useraccounts (email,uName,uPass,DoB,Gender) 
				values ('$uEmail','$uName','$mdPass','$uDoB','$uGender')";
		
	mysqli_query($con,$query) or die("Insert query error...");
	
	
	header("location:loginForm.php");
	
	
	
?>