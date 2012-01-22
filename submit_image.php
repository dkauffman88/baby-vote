<html>

<head>
<!-- Stuff -->
</head>

<body>
    <h1> Well this worked... </h1>
</body>

<?php
// Where the file is going to be placed 
$target_path = "pics/";

/* Add the original filename to our target path.  
Result is "uploads/filename.extension" */
$target_path = $target_path . basename( $_FILES['pic']['name']);

if(move_uploaded_file($_FILES['pic']['tmp_name'], $target_path)) {
    echo "The file " .  basename( $_FILES['pic']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

?>

</html>
