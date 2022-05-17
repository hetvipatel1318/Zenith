<html>
<a href="http://localhost/zenith/e%20Learning/">HOME</a><br><br>
<a href="http://localhost/zenith/coursepurchase.php">ongoing courses</a>




<?php
$connection=mysqli_connect("localhost","root","","zenith_elearning") or die("Connection error...");
$db=mysqli_select_db($connection,'zenith_elearning');

if(isset($_POST['search']))
{
	$uEmail=$_POST['uEmail'];
	$query="SELECT * from dashboard where email='$uEmail'";
	$query_run=mysqli_query($connection,$query) or die( mysqli_error($connection));
	
	
	
	
	
	while($row=mysqli_fetch_array($query_run))
	{
		?>
        
        <tr><th><td>		
		<?php echo  "<h2><u>WElcome!!<br></u></h2><br><hr>you have enrolled to the following course<br>" .$row['uName']. ""; ?></td></th></tr>
		
		<?php
		
	}
}
?>