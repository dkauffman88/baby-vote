<html>

<head>
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
<section class='content'>
<?php

        // Database stuff
    include 'db_pass.php';

    mysql_connect("localhost",$user,$password);
    @mysql_select_db($database) or die( "Unable to select database");
    
    foreach ( $_POST AS $id ){
        echo "<h1>$id</h1>";
        $query = "UPDATE babys SET live = 1 WHERE id = '$id'";
        mysql_query($query);
    }
    mysql_close();
    
    echo "<h1>updated DB</h1>";
    echo "<a href='http://baby-war.99k.org/review.php'>Review More</a>";

?>

</section>
</body>
</html>
