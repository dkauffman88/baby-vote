﻿<!DOCTYPE HTML>
<html> 
<head>
    <META http-equiv="baby-vote" content="text/html; charset=utf-8"/>
	<META name="description" content="baby-vote.com vote on the cutest baby pictures on the web!"/>
    <META name="keywords" content="baby,baby war,babies,best,cute,cutest,cuter,choose,cute baby,cute babies,smiling babies,smiling baby,happy baby" />
    <title>Baby War - Vote for the cutest baby!</title>
    <link rel="stylesheet" type="text/css" href="style.css" charset="utf-8"/>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28103929-1']);
  _gaq.push(['_setDomainName', 'baby-vote.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	<style type="text/css">
.style1 {
				font-size: medium;
				color: #1C7067;
}
</style>
</head>

<!-- Head ends / Body begins -->

<body>
<header>
<img alt="BABY-VOTE" src="./letters/header.jpg" />
</header>

<nav>
<a href="./index.php"><strong><span>Home</span></strong></a> | 
<a href="./submit.html"><strong><span class="style1">Submit Baby Pictures</span></strong></a> |
<a href="./beautiful.php"><strong><span>Beautiful Babies</span></strong></a> |
<a href="./products.html"><strong><span>Baby Shop</span></strong></a> |
<a href="./about.html"><strong><span>About Baby Vote</span></strong></a>
</nav>

<!-- Content Begins Here -->
<section class="content">
    
        <?php
        // Database stuff
        $user="642393_ed";
        $password="williamandmary";
        $database="baby-war_99k_pic";

        mysql_connect("localhost",$user,$password);
        @mysql_select_db($database) or die( "Unable to select database");

        // Grab random image 1
        $query = "SELECT path, id FROM babys ORDER BY votes DESC;";
        $output = mysql_query($query);
        
        for ($i = 0; $i < 10; $i+=1){
            $row = mysql_fetch_array($output, MYSQL_ASSOC);
            $path = $row['path'];
            $id = $row['id'];
            $j = $i + 1;
            echo "<h1>$j</h1><a href='http://baby-war.99k.org/individual.php?id=$id'><image class='baby' id='$i' src='./pics/$path'/></a><br/><br/><br/>\n";
        }
        

        mysql_close();
        ?>       
</section>
<!-- Content Ends Here -->

<footer>
      
    <g:plusone><!-- Place this render call where appropriate -->
    <script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
    </script>
    </g:plusone></p>
</footer>
</body>

</html>
