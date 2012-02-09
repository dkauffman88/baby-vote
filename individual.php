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
<a href="./coming.html"><strong><span>About Baby Vote</span></strong></a>
</nav>

<!-- Content Begins Here -->
<section class="content">
    <div class="center">

    <?php
    $id = $_GET["id"];
    
    // Database stuff
    $user="642393_ed";
    $password="williamandmary";
    $database="baby-war_99k_pic";

    mysql_connect("localhost",$user,$password);
    @mysql_select_db($database) or die( "Unable to select database");

    // Grab random image 1
    $query = "SELECT path FROM babys WHERE id=$id;";
    $output = mysql_query($query);
    $image1 = mysql_result($output, 0);
    mysql_close();
        
    echo "<img class='baby' id='6' src='./pics/$image1' /><br/>";
    echo "<a href='./ind_vote.php?id=" . $id . "'>Vote For Me!</a>";
    ?>
    
    </div>
</section>
<!-- Content Ends Here -->

<footer>  
</footer>
</body>
</html>
