<html>
<head>
<style>
h2{
    padding:20px 0px;
}
h3{
    font-family:georgia;
}
button {
  background-color: #fff;
  border: 4px solid #0D4394;
  padding: 16px 32px;
  text-decoration: none;
  margin: 20px 2px;
  cursor: pointer;
  width:10%;
  font-weight:bold;
  font-size:20px;
  float:right;
  font-family:serif;
}
h1{
	color:black;
	font-size:35px;
}
h2{
	font-family:serif;
	font-size:30px;
	font-weight:normal;
}
h3{
	font-family:serif;
	font-size:25px;
	color:#1BB2D6;
	text-decoration:underline;   
}
hr{
	border:solid 3px #0D4394;
}
img{
	width: 60px;
	height: 60px;
	vertical-align: middle;
}
</style>
</head>
<button onclick="window.print()">Print</button><br><br><br><br><br>

<br><div style="border:4px solid #0D4394;float:right;background-color:#fff;text-align:center;width:4.4%; margin: 20px 2px; padding: 16px 32px;">
<a style="text-decoration:none;font-size:20px;color:black;font-weight:bold;" href="http://localhost/zenith/e%20Learning/">Home</a>
</div><br><br><br><br><br>

<br><div style="border:4px solid #0D4394;margin: 20px 2px;background-color:#fff;padding:16px 32px;text-align:center;width:4.5%;float:right;">
<a style="text-decoration:none;color:black;font-size:20px;font-weight:bold;" href="http://localhost/zenith/coursepurchase.php">My Courses</a>
</div>

<body style="background:url(oc.jpg);background-repeat:no-repeat;background-size:100% 100%;">
<center>
<table style="width:50%; position:absolute;top: 0;background-color:#fff; color:#0D4394; border:5px solid #0D4394; float:top; cellpadding:5; border-collapse:collapse; text-align:center; margin:20px 0px;">
<?php
$connection=mysqli_connect("localhost","root","","zenith_elearning") or die("Connection error...");
$db=mysqli_select_db($connection,'zenith_elearning');

if(isset($_POST['search']))
{
	$uEmail=$_POST['uEmail'];
	$query="SELECT * from certificate where email='$uEmail'";
	$query_run=mysqli_query($connection,$query) or die( mysqli_error($connection));;
	
	
	
	
	
	while($row=mysqli_fetch_array($query_run))
	{
		?>
        
        <tr><th><td>		
		<?php echo  "<h1><u>CERTIFICATE OF COURSE COMPLETION<br></u></h1><br><h2> It is a very satisfying and cheerful experience to provide you this Certificate .<br><br> This is to Certify that<br><u>".$row['uName']."</u><br><br> has successfully completed Java course from our Website Zenith we highly appreciate your skills and
            we wish you all the best for your future <br><h3>TEAM ZENITH<img src='light4.png'></h3></h2>";?></td></th></tr>
		
		<?php
		
	}
}
?>
</table>
</center>
</body>
</html>