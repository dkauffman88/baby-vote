<?php

// Database stuff
$user="642393_ed";
$password="williamandmary";
//$database="baby-war_99k_pic";
$database="babywar_99k_pic";

mysql_connect("localhost",$user,$password);
@mysql_select_db($database) or die( "Unable to select database");

// Read the post data
$vote = $_GET["path"];

// Increase votes
$query = "UPDATE babys SET votes = votes+1 WHERE path='$vote'";
mysql_query($query);

// Query votes
$query=mysql_query("SELECT votes FROM babys WHERE path = '$vote'");
$query_row=mysql_fetch_array($query);
$vote_count = $query_row['votes'];

// Grab random images
$query = "SELECT path FROM babys ORDER BY RAND();";
$output = mysql_query($query);
$image1 = mysql_result($output, 0);

$output = mysql_query($query);
$image2 = mysql_result($output, 0);
mysql_close();

echo $image1 . '@@' . $image2 . '@@' . $vote_count;

?>
