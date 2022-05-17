<script src="https://kit.fontawesome.com/fe64e0f126.js" crossorigin="anonymous"></script>

<?php include("inc/function.php"); ?>

<div id='header'>
    <div id='up_head'>
        <div id='link'>
           <?php echo head_link(); ?>
            
    </div>
    <div id='date'>
        <p><?php echo date('l, d F Y'); ?></p>
    </div>
    <div id='slog'>
        <p>DARE TO DREAM</p>
    </div>
    </div>
    
    <div id='menu'>
        <h2><i class="fas fa-bars" ></i></h2>
        <?php include("inc/cat_menu.php"); ?>
    </div>

    <div style="align:center; width:970px; padding-left:15%;" id='title'>
        <h2><a style="text-align: center;" href='index.php'>Zenith</a></h2>
    </div>

    <div style="float:right;" id='head_login'>
    <a href="http://localhost/zenith/loginForm.php">
    <h4 style="color:#DFFF00"><i class="fas fa-user"></i> Login</h4></a>     
    </div>

    <div style="float:right;" id='head_signup'>
    <a href='http://localhost/zenith/signupForm.php'>
    <h4 style="color:#DFFF00"><i class="fas fa-user-plus"></i> Signup</h4></a>
    </div>   
    
</div>