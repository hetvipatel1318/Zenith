<script src="https://kit.fontawesome.com/fe64e0f126.js" crossorigin="anonymous"></script>
<?php
    function head_link(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from contact");
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"<ul>
                <li><a href='https://www.facebook.com/".$row['fb']."' target='_blank'><i class='fab fa-facebook-f'></i></a></li>
                <li><a href='https://www.twitter.com/".$row['tw']."' target='_blank'><i class='fab fa-twitter'></i></a></li>
                <li><a href='https://www.google.com/".$row['gp']."' target='_blank'><i class='fab fa-google-plus'></i></a></li>
                <li><a href='https://www.youtube.com/".$row['yt']."' target='_blank'><i class='fab fa-youtube'></i></a></li>
                <li><a href='https://www.linkedin.com/".$row['link']."' target='_blank'><i class='fab fa-linkedin'></i></a></li>
            </ul>";
    }

    function cat_menu(){
        include("inc/db.php");
        $get_cat=$con->prepare("select * from cat");
        $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $get_cat->execute();
        while($row=$get_cat->fetch()):
            echo"<li><a href='#'>".$row['cat_icon']." ".$row['cat_name']."</a></li>";
        endwhile;
    }

    function home_cat(){
        include("inc/db.php");
        $get_cat=$con->prepare("select * from cat");
        $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $get_cat->execute();
        while($row=$get_cat->fetch()):
        
        echo"<li>
        <a href='http://localhost/zenith/Development.php'>
        <center>
        ".$row['cat_icon']."    
        <h4>".$row['cat_name']."</h4>
        <p>2</p>
        </center>
        </a>
        </li>";

        endwhile;
    }
?>
  
