<script>

function validate()
{
	
	uEmail=document.getElementById("idEmail").value;
	uPass=document.getElementById("idPass").value;
	msg=document.getElementById("msg");
	msg.innerHTML="";
	var flag=true;
	
	if(uEmail.length == 0)
	{
		msg.innerHTML=msg.innerHTML+"<BR>Email must not be blank...";
		flag=false;
	}
	if(uPass.length < 6)
	{
		msg.innerHTML=msg.innerHTML+"<BR>Password must be at least of 6 characters";
		flag=false;
	}
	
	return flag;
	
}
</script>
<body style="background:url(p8.jpg);background-repeat:no-repeat;background-size:100% 100%">

<form method="POST" action="login.php" onsubmit="return validate()">
<center>
<table style="border: none; width:155px;height:150px;align:center"><br>
<caption><h1 style="color:white"> User Login </h1> </caption>

<tr>
	<td> <input style="height:35px;width:220px" type="email" id="idEmail" name="uEmail" placeholder="Email">
</tr><br><br>
<tr>
	<td> <input style="height:35px;width:220px" type="password" id="idPass" name="pass" placeholder="Password">
</tr>

<tr>
	<td> <div id="msg" style="color:red"> </div>
</tr>
<tr>
	<td> <input  style="height:25px;width:50%" type="submit" value="Login"><input  style="height:25px;width:50%"  type="reset" value="Clear">
</tr>
</table>

</form>
</center>