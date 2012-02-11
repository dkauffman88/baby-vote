<!DOCTYPE HTML>
<html> 
<head>
    <META http-equiv="baby-vote" content="text/html; charset=utf-8"/>
    <title>baby-vote.com</title>
    <link rel="stylesheet" type="text/css" href="style.css" charset="utf-8"/>
</head>

<!-- Head ends / Body begins -->

<body>
<header>
<img alt="BABY-VOTE" src="./letters/header.jpg" />
</header>

<nav>
<a href="./index.php"><strong><span>Home</span></strong></a> | 
<a href="./submit.html"><strong><span>Submit Baby Pictures</span></strong></a> |
<a href="./beautiful.php"><strong><span>Beautiful Babies</span></strong></a> |
<a href="./coming.html"><strong><span>Baby Products</span></strong></a> |
<a href="./about.html"><strong><span>About Baby Vote</span></strong></a>
</nav>
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
