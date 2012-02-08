<?php

echo "banana\n";

echo "something\n";

$folder = $_GET['folder'];

// Database stuff
$user="642393_ed";
$password="williamandmary";
//$database="baby-war_99k_pic";
$database="baby-war_99k_pic";

mysql_connect("localhost",$user,$password);
@mysql_select_db($database) or die( "Unable to select database");

//$dh = opendir($argv[1]);
if ($dh = opendir($folder)){
    while (($file = readdir($dh)) !== false){
        echo "File: " . $file . "\n";
        if ($file != "." && $file != ".."){
        
            // Insert the file info into the table
            $query = "INSERT INTO babys (path, votes) VALUES('tmp_name', '0')";
            mysql_query($query) or die ('Error adding pic to database');
            $id = mysql_insert_id() or die ('Error getting the id');

            // Now I have the file's real path (with unique ID appended)
            $real_path = $file . $id;
            $real_path = preg_replace("/[^A-Za-z0-9]/","",$real_path);
            $db_path = str_replace(" ", "", $real_path);
            $real_path = "/www/99k.org/b/a/b/baby-war/htdocs/pics/" . $db_path;

            $query = "UPDATE babys SET path='$db_path' WHERE id='$id'";
            mysql_query($query) or die ('Error updating file path with id');
            
            // Move the file to its real home.
            echo "Moving " . $folder . $file . " to " . $real_path . "<br/";
            if(copy($folder . $file, $real_path)) {
                echo "The file " .  $file . " has been uploaded\n";
            } 
            else{
                echo "There was an error uploading the file, please try again!\n";
            }
            echo "\n";
        }
    }
    closedir($dh);
}


mysql_close();
echo "<p>All Done!</p>";

?>
