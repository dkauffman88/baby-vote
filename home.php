<?php
	session_start();
	if(!$_SESSION['loggedIn']) // If the user IS NOT logged in, forward them back to the login page
	{
		header("location:login.html");
	}
?>

﻿<!DOCTYPE HTML>
<html>
	<head>
		<title>My Website - Protected Content</title>
		<link href="../../image/prophet.jpg" rel="'Shortcut" type="image/x-icon/"><br /><link rel="icon" href="../../image/prophet.jpg" type="image/x-icon">

		<!-- Google Analytics -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-24507087-1']);
		  _gaq.push(['_trackPageview']);
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</head>
<body>
	<?php
		if(!$_SESSION['loggedIn']) // If the user IS NOT logged in, forward them back to the login page
		{
			header("location:login.html");
		}else{ // If the user IS logged in, then echo the page contents:
			$currentUser = $_SESSION['username']; // Gets the username from the cookie we created in Check.php
			$message = '<p>Welcome, ' . ucfirst($currentUser) . '!</p>'; // This compiles hello (your username)
			echo $message; // This echo's (actually outputs) the message
		}
	?>
	<p>Good job! You got it working!!</p>
	<a href="Logout.php">Logout</a>
</body>
</html>
