<script>
function checkPass(obj)
{
	uPass=document.getElementById("idPass");
	cPass=document.getElementById("idCPass");
	msg=document.getElementById("msg");
	msg.innerHTML="";
	if(uPass.value!=cPass.value)
	{
		msg.innerHTML=msg.innerHTML+"<BR>Password does not match...";
		obj.focus();
		return;
	}
}
function validate()
{
	
	uName=document.getElementById("idName").value;
	uEmail=document.getElementById("idEmail").value;
	uPass=document.getElementById("idPass").value;
	uDoB=document.getElementById("idDoB").value;
	msg=document.getElementById("msg");
	msg.innerHTML="";
	cPass=document.getElementById("idCPass").value;
	var flag=true;
	if(uName.length == 0)
	{
		msg.innerHTML="Name must not be blank...";
		flag=false;
	}
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
	if(uDoB.length == 0)
	{
		msg.innerHTML=msg.innerHTML+"<BR>DoB must not be blank...";
		flag=false;
	}
	if(uPass!=cPass)
	{
		msg.innerHTML=msg.innerHTML+"<BR>Password does not match...";
		flag=false;
	}
	return flag;
	
}
</script>
<body style="background:url(p8.jpg);background-repeat:no-repeat;background-size:100% 100%">

<form method="POST" action="signup.php" onsubmit="return validate()">
<center>
<table style="border: none; width:155px;height:150px;align:center"><br>
<caption><h1 style="color:white"> Sign Up </h1> </caption>
<tr>
	<td> <input  style="height:35px;width:220px" type="text" id="idName" name="uName" placeholder="Your Name">
</tr>
<tr>
	<td> <input style="height:35px;width:220px" type="email" id="idEmail" name="uEmail" placeholder="Email">
</tr>
<tr>
	<td> <input style="height:35px;width:220px" type="password" id="idPass" name="pass" placeholder="Password">
</tr>
<tr>
	<td> <input style="height:35px;width:220px" type="password" id="idCPass" onblur="checkPass(this)" name="cpass" placeholder="Confirm Password">
</tr>
<tr>
	<td> <input style="height:35px;width:220px" type="date" id="idDoB" name ="uDoB" placeholder="DoB">
</tr>
<tr>
	<td> <label style="color:white;font-size:22px"> Male </label> <input  type="radio"  name="gender" value="Male">
		<label style="color:white;font-size:22px"> Female </label> <input type="radio" name="gender" value="Female">
</tr>
<tr>
	<td> <div id="msg" style="color:red"> </div>
</tr>
<tr>
	<td> <input style="height:25px;width:50%" type="submit" value="Sign Up"><input style="height:25px;width:50%" type="reset" value="Clear">
</tr>

</table>
</center>
</body>

</form>