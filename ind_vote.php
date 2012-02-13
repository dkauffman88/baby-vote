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
<section class="personal">

    <?php

    // Database stuff
    include 'db_pass.php';

    mysql_connect("localhost",$user,$password);
    @mysql_select_db($database) or die( "Unable to select database");

    // Read the post data
    $id = $_GET["id"];

    // Increase winner
    $query = "UPDATE babys SET votes = votes+1 WHERE id = '$id'";
    mysql_query($query);
    $query = "UPDATE babys SET elections = elections + 1 WHERE id = '$id'";
    mysql_query($query);

    // Winner stats
    $query=mysql_query("SELECT votes FROM babys WHERE id = '$id'");
    $query_row=mysql_fetch_array($query);
    $vote_count = $query_row['votes'];

    $query=mysql_query("SELECT elections FROM babys WHERE id = '$id'");
    $query_row=mysql_fetch_array($query);
    $election_count = $query_row['elections'];
    mysql_close();
    
    echo "This baby now has: " . $vote_count . " votes<br/>";
    echo "This baby has been in: " . $election_count . " elections<br/>";

    ?>
</section>
<!-- Content Ends Here -->

<footer>  
</footer>
</body>
</html>
