<!DOCTYPE HTML>
<html> 
<head>
    <META http-equiv="baby-vote" content="text/html; charset=utf-8"/>
    <title>baby-vote.com</title>
    <link rel="stylesheet" type="text/css" href="style.css" charset="utf-8"/>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<!-- Head ends / Body begins -->
<body>
<?php
include 'header.php';
?>

<!-- Content Begins Here -->
<section class="content">
    <div class="center">

    <?php
    $id = $_GET["id"];
    
    // Database stuff
    include 'db_pass.php';

    mysql_connect("localhost",$user,$password);
    @mysql_select_db($database) or die( "Unable to select database");

    // Grab random image 1
    $query = "SELECT path FROM babys WHERE id=$id AND live=1;";
    $output = mysql_query($query);

    if ( mysql_num_rows($output) > 0 ){
        $image1 = mysql_result($output, 0);
    }
    mysql_close();
    
    if ($image1 == "" ){
        echo "<h1>This image has not yet been reviewed</h1>";
    }
    
    else{
        echo "<img class='baby' src='./pics/$image1' /><br/>";
        echo "<a href='./ind_vote.php?id=" . $id . "'>Vote For Me!</a>";
    }
    ?>
    
    </div>
</section>
<!-- Content Ends Here -->

<footer>  
</footer>
</body>
</html>
