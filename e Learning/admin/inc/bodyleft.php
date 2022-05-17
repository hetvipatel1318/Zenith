<div id="bodyleft">
    <h3>Categories Management</h3>
    <ul>
        
        <li><a href="index.php?cat">View Course Categories</a></li>
        <li><a href="index.php?sub_cat">View Sub Categories</a></li>
        <li><a href="index.php?lang">View Languages</a></li>
    </ul>
    <h3>Course Management</h3>
    <ul>
        <li><a href="http://localhost/zenith/index1.php">Upload Course videos</a></li>
    </ul>
    <h3>Pages Management</h3>
    <ul>
        <li><a href="index.php?terms">Terms & Conditions Page</a></li>

        
        <li><a href="index.php?faqs">FAQs Page</a></li>
        
    </ul>
    <h3><a href="http://localhost/zenith/e%20Learning/">HOME</a></h3>
</div>

<?php
    if(isset($_GET['cat'])){
        include("cat.php");
    }
    if(isset($_GET['lang'])){
        include("lang.php");
    }
    if(isset($_GET['sub_cat'])){
        include("sub_cat.php");
    }
    if(isset($_GET['terms'])){
        include("terms.php");
    }
    if(isset($_GET['faqs'])){
        include("faqs.php");
    }
?>