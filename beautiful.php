<!DOCTYPE HTML>
<html> 
<head>
    <META http-equiv="baby-vote" content="text/html; charset=utf-8"/>
	<META name="description" content="baby-vote.com vote on the cutest baby pictures on the web!"/>
    <META name="keywords" content="baby,baby war,babies,best,cute,cutest,cuter,choose,cute baby,cute babies,smiling babies,smiling baby,happy baby" />
    <title>Baby War - Vote for the cutest baby!</title>
    <link rel="stylesheet" type="text/css" href="style.css" charset="utf-8"/>

</head>

<!-- Head ends / Body begins -->

<body>
<header>
<img alt="BABY-VOTE" src="./letters/header.jpg" />
</header>

<nav>
<a href="./index.php"><strong><span>Home</span></strong></a> | 
<a href="./submit.html"><strong><span>Submit Baby Pictures</span></strong></a> |
<a href="./beautiful.html"><strong><span>Beautiful Babies</span></strong></a> |
<a href="./coming.html"><strong><span>Baby Products</span></strong></a> |
<a href="./coming.html"><strong><span>About Baby Vote</span></strong></a>
</nav>

<!-- Content Begins Here -->
<section class="content">
    
    <div class="election">
        <?php
        // Database stuff
        $user="642393_ed";
        $password="williamandmary";
        $database="baby-war_99k_pic";

        mysql_connect("localhost",$user,$password);
        @mysql_select_db($database) or die( "Unable to select database");

        // Grab random image 1
        $query = "SELECT path FROM babys ORDER BY RAND();";
        $output = mysql_query($query);
        $image1 = mysql_result($output, 0);
        
        $image2 = $image1;
        while ($image2 == $image1)
        {
            $output = mysql_query($query);
            $image2 = mysql_result($output, 0);
        }
        mysql_close();
        
        echo "<image class='baby' id='img1' onclick='voted(event)' src='./pics/$image1' width='400'/>";
        echo "<div id='vs'><img src='./letters/vs.jpg'/></div>";
        echo "<image class='baby' id='img2' onclick='voted(event)' src='./pics/$image2' width='400'/>";
        
        ?>       
    </div>
    
    <div id='inst'>
        <strong>Choose The Cutest Baby!</strong></span><br/>
        <a id='draw' href="./index.php"><strong>Draw!</strong></a><br/>
    </div>
    
    <div id='result'>
        <div class="winner"> <!-- Winner image from last election -->
            <p>Winner</p>
            <hr/>
            <p id = 'winner_votes'></p>
            <p id = 'winner_percent'></p>
            <a id='link1' href=''><img id = 'winner' src='' width='100px'/></a>
        </div>
        
        <div class="winner">
            <p>Loser</p>
            <hr/>
            <p id = 'loser_votes'></p>
            <p id = 'loser_percent'></p>
            <a id='link2' href=''><img id = 'loser' src='' width='100px'/></a>
        </div>
    </div>
    <br/>
    <br/>
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
