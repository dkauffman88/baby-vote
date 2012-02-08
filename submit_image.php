<html>

<head>
<!-- Stuff -->
</head>

<body>
    <h1> Well this worked... </h1>

<?php

//File Copy Stuff
// This is the tmp name.  I use this to insert into the DB to get the ID of this file
$target_path = basename( $_FILES['pic']['name']);
//$title = $_POST['title'];

// Database stuff
$user="642393_ed";
$password="williamandmary";
//$database="baby-war_99k_pic";
$database="baby-war_99k_pic";

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

echo "You can reach this baby's individual page at: http://baby-war.99k.org/individual.php?id=" . $id . "<br/>";

echo "<p>All Done!</p>";

?>

</body>
</html>
