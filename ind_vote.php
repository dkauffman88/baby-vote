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
<a href="./index.php"><strong>Home</strong></a> | 
<a href="./submit.html"><strong>Submit Baby Pictures</strong></a>
</nav>

<!-- Content Begins Here -->
<section class="personal">

    <?php

    // Database stuff
    $user="642393_ed";
    $password="williamandmary";
    //$database="baby-war_99k_pic";
    $database="baby-war_99k_pic";

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