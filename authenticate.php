
<?php
	//session_start();
	$username = $_POST["username"]; // This is the inputted username from the form in login.html
	$u_password = $_POST["password"]; // This is the inputted password from the form in login.html
	
	echo "<h1>$username $u_password</h1>";
    
    include 'db_pass.php';
    
    mysql_connect("localhost",$user,$password);
    @mysql_select_db($database) or die( "Unable to select database");

	$query = "SELECT * FROM users WHERE username='" . $username . "' AND password='" . $u_password . "'";
	$result = mysql_query($query);

	if(mysql_num_rows($result) == 1) // If there is a match..
	{
	    session_start();
		$_SESSION["username"] = $username; // Keeps this user logged in the the SESSION var
		$_SESSION["loggedIn"] = true; // Lets us know somebody is logged in
		header("Location:home.php");
		//echo "<h1>Logged in!</h1>";
	}
	
	else{ // If invalid information was entered
		header("Location:login.html"); // Lastly, redirect back to login page
	}
?>

