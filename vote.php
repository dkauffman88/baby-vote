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

$query = "UPDATE babys SET votes = votes+1 WHERE path='$vote'";
mysql_query($query);

mysql_close();

?>
