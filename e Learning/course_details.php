<script src="https://kit.fontawesome.com/fe64e0f126.js" crossorigin="anonymous"></script>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Zenith | Course Details</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
       <?php include("inc/header.php");?>
       <div id='wrap'>  
        <?php
            echo course_details();
            include("inc/footer.php");
        ?>
       </div>
    </body>
</html>