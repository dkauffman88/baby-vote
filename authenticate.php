<?php
	session_start();
	$username = $_POST["username"]; // This is the inputted username from the form in login.html
	$password = $_POST["password"]; // This is the inputted password from the form in login.html

    include db_pass.php;

	$sql="SELECT * FROM users WHERE username='$username' AND password='$password'"; 
	$result=mysql_query($sql);
	$result=mysql_fetch_array($result);
	
	echo "<h1>" . $username . "</h1>";
	echo "<h1>" . $password . "</h1>";
	echo $result;

	// Mysql_num_row is counting table row
	$count=1; // Check if supplied user, password, match database

	if($count==1) // If there is a match..
	{
		$_SESSION["username"] = $username; // Keeps this user logged in the the SESSION var
		$_SESSION["loggedIn"] = true; // Lets us know somebody is logged in
		header("Location:home.php");
	}else{ // If invalid information was entered
		header("Location:login.html"); // Lastly, redirect back to login page
	}
?>
