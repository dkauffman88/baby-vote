<!DOCTYPE HTML>
<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css" charset="utf-8"/>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<!-- Head ends / Body begins -->
<body>
<?php
include 'header.php';
?>

<!-- Content Begins Here -->
<section class='content'>
<?php

    $new_user = $_POST['username'];
    $new_password = $_POST['password'];

    echo $new_user . " " . $new_password;

    include 'db_pass.php';

    mysql_connect("localhost",$user,$password);
    @mysql_select_db($database) or die( "Unable to select database");

    $query = "SELECT name FROM users WHERE name='$new_user'";
    $result = mysql_query($query);
    if (mysql_num_rows($result) > 0){
        echo "<h1>This username is already choosen!</h1>";
    }
    else{
        $query = "INSERT INTO users (username, password) VALUES('$new_user', '$new_password')";
        mysql_query($query) or die ('Error entering your username / password.  Try again');
        
    	session_start();
		$_SESSION["username"] = $new_user; // Keeps this user logged in the the SESSION var
		$_SESSION["loggedIn"] = true; // Lets us know somebody is logged in
		header("Location:home.php");
    }

?>
</section>
</body>
</html>
