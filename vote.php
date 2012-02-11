<?php

include 'db_pass.php';

mysql_connect("localhost",$user,$password);
@mysql_select_db($database) or die( "Unable to select database");

// Read the post data
$winner = $_GET["winner"];
$loser = $_GET["loser"];

// Increase winner
$query = "UPDATE babys SET votes = votes+1 WHERE path = '$winner'";
mysql_query($query);
$query = "UPDATE babys SET elections = elections + 1 WHERE path = '$winner'";
mysql_query($query);
// Increase loser
$query = "UPDATE babys SET elections = elections + 1 WHERE path = '$loser'";
mysql_query($query);


// Winner stats
$query=mysql_query("SELECT votes FROM babys WHERE path = '$winner'");
$query_row=mysql_fetch_array($query);
$w_vote_count = $query_row['votes'];

$query=mysql_query("SELECT elections FROM babys WHERE path = '$winner'");
$query_row=mysql_fetch_array($query);
$w_election_count = $query_row['elections'];

// Loser stats
$query=mysql_query("SELECT votes FROM babys WHERE path = '$loser'");
$query_row=mysql_fetch_array($query);
$l_vote_count = $query_row['votes'];

$query=mysql_query("SELECT elections FROM babys WHERE path = '$loser'");
$query_row=mysql_fetch_array($query);
$l_election_count = $query_row['elections'];


// Grab random images
$query = "SELECT path FROM babys ORDER BY RAND();";
$output = mysql_query($query);
$image1 = mysql_result($output, 0);

$image2 = $image1;
while ($image2 == $image1)
{
    $output = mysql_query($query);
    $image2 = mysql_result($output, 0);
}


// New vote count
$query = "SELECT SUM(votes) FROM babys;";
$total_votes = mysql_result(mysql_query($query), 0);
mysql_close();

echo $image1 . '@@' . $image2 . '@@' . $w_vote_count . '@@' . $w_election_count . '@@' . $l_vote_count . '@@' . $l_election_count . '@@' . $total_votes;

?>
