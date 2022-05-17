<script src="https://kit.fontawesome.com/fe64e0f126.js" crossorigin="anonymous"></script>
<?php
    require("Connection.php");
?>
<html>
<head>
<title> ADMIN LOGIN </title>
<link rel="stylesheet" type="text/css" href="admincss.css">
</head>
<center>
<body>    
<div class="login-form">
    <h2> ADMIN LOGIN PANEL </h2>
    <form method="POST">
        <div class="input-field">
            <i style=" color: darkslategray;
    padding: 10px 14px;
    background-color: #f2f4f6;
    margin-right: 4px;" class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="AdminName">
        </div>
        <div class="input-field">
            <i style=" color: darkslategray;
    padding: 10px 14px;
    background-color: #f2f4f6;
    margin-right: 4px;" class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="AdminPassword">
        </div>

        <button type="submit" name="Signin"> Sign In </button>

        <div class="extra">
            <a href="#">Forgot Password ?</a>
        </div>
    </form>
</div>
<?php

if(isset($_POST['Signin']))
{
    $query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`= '$_POST[AdminPassword]'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['AdminLoginId']=$_POST['AdminName'];
        header("location: http://localhost/zenith/e%20Learning/admin/index.php?cat");
    }
    else
    {
        echo "<script>alert('Incorrect Password');</script>";
    }
}

?>
</body>
</center>
</html>