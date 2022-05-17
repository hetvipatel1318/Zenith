<script src="https://kit.fontawesome.com/fe64e0f126.js" crossorigin="anonymous"></script>
<html>
<head>
<title> ADMIN LOGIN </title>
<link rel="stylesheet" type="text/css" href="paycss.css">
</head>
<center>
<body>    
<div class="login-form">
    <h2> ZENITH PAYMENT FORM </h2>

    

    <form method="POST" action="dashform.php">
    <h3> Personal Information </h3>
    <br>
        <div class="input-field">
            <i style=" color: darkslategray;
    padding: 10px 14px;
    background-color: #f2f4f6;
    margin-right: 4px;" class="fas fa-signature"></i>
	<input type="text" id="idName" name="uName" placeholder="Your Name " required>

             </div>
		<br>
    
    <h3> Credit Card Information </h3>  
    <br>    

    <div class="input-field">
            <i style=" color: darkslategray;
    padding: 10px 14px;
    background-color: #f2f4f6;
    margin-right: 4px;" class="fas fa-signature"></i>
            <input type="text" placeholder="Name on Card" name="NameCard">
        </div>  
        <div class="input-field">
            <i style=" color: darkslategray;
    padding: 10px 14px;
    background-color: #f2f4f6;
    margin-right: 4px;" class="fab fa-cc-visa"></i>
            <input type="text" placeholder="Card Number" name="CardNo">
        </div> 
        <div class="input-field">
            <i style=" color: darkslategray;
    padding: 10px 14px;
    background-color: #f2f4f6;
    margin-right: 4px;" class="fas fa-calendar-week"></i>
            <input type="text" placeholder="amount" name="amount">
        </div> 
        <div class="input-field">
            <i style=" color: darkslategray;
    padding: 10px 14px;
    background-color: #f2f4f6;
    margin-right: 4px;" class="fas fa-credit-card"></i>
            <input type="text" placeholder="payto" name="payto" value="paying to zenithsrh18" checked>
        </div> 

        <a href="dashform.php"> SUBMIT </a>

       
    </form>
</div>