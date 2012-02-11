<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css" charset="utf-8"/>
</head>

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

<h1>Success!</h1>

<?php

//File Copy Stuff
// This is the tmp name.  I use this to insert into the DB to get the ID of this file
$target_path = basename( $_FILES['pic']['name']);
//$title = $_POST['title'];

// Database stuff
include 'db_pass.php';

mysql_connect("localhost",$user,$password);
@mysql_select_db($database) or die( "Unable to select database");

// Insert the file info into the table
$query = "INSERT INTO babys (path, votes) VALUES('$target_path', '0')";
mysql_query($query) or die ('Error adding pic to database');
$id = mysql_insert_id() or die ('Error getting the id');

// Now I have the file's real path (with unique ID appended)
$real_path = $target_path . $id;
$real_path = preg_replace("/[^A-Za-z0-9]/","",$real_path);
$db_path = str_replace(" ", "", $real_path);
$real_path = "/www/99k.org/b/a/b/baby-war/htdocs/pics/" . $db_path;

$query = "UPDATE babys SET path='$db_path' WHERE id='$id'";
mysql_query($query) or die ('Error updating file path with id');

mysql_close();

// Move the file to its real home.
if(move_uploaded_file($_FILES['pic']['tmp_name'], $real_path)) {
    echo "The file " .  basename( $_FILES['pic']['name']). 
    " has been uploaded<br/>";
} else{
    echo "There was an error uploading the file, please try again!<br/>";
}

echo "You can reach this baby's individual page at: <a href='http://baby-war.99k.org/individual.php?id=" . $id . "'>http://baby-war.99k.org/individual.php?id=" . $id . "<a/><br/>";

echo "<p>All Done!</p>";

?>

</body>
</html>
