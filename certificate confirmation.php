<html>
<head>
<style> 
input[type=submit], input[type=reset] {
  background-color: #A2F0FB;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  width:155px;
}
</style>
</head>
<body style="background:url(oc.jpg);background-repeat:no-repeat;background-size:100% 100%;">

<form method="POST" action="cc2.php">
<center>
<h1 style="color:black; FONT-FAMILY:Bookman Old Style; background-color:#67D0DE; padding:10px;"> PLEASE FILL THE FORM BELOW </h1>
<br><br>
<div style="background-color:#67D0DE; align:center; width:500px; padding:10px;">

<table style="border: none; width:155px; height:150px; align:center">
<tr>
	<td> <input  style="height:35px;width:320px" type="text" id="idName" name="uName" placeholder="Your Name as you want in your certificate" required>
</tr>
<tr>
	<td> <input style="height:35px;width:320px" type="email" id="idEmail" name="uEmail" placeholder="Email" required>
</tr><br><br>

<tr>
	<td> <input type="submit" value="Submit"><input type="reset" value="Clear">
</tr>

</table>
</div>
</center>
</form>
</body>
</html>