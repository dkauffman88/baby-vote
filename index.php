<!DOCTYPE HTML>
<html> 
<head>
    <META http-equiv="baby-vote" content="text/html; charset=utf-8"/>
	<META name="description" content="baby-vote.com vote on the cutest baby pictures on the web!"/>
    <META name="keywords" content="baby,baby war,babies,best,cute,cutest,cuter,choose,cute baby,cute babies,smiling babies,smiling baby,happy baby" />
    <title>Baby War - Vote for the cutest baby!</title>
    <link rel="stylesheet" type="text/css" href="style.css" charset="utf-8"/>
    
    <script type=text/javascript>

function voted(event){

    // Ajax stuff
	var ajaxRequest = new XMLHttpRequest;  // The variable that makes Ajax possible!
	
	ajaxRequest.onreadystatechange = function(){
	    if(ajaxRequest.readyState == 4){
	    	//document.getElementById('winner').appendChild(ajaxRequest.responseText);
	    	var response = ajaxRequest.responseText;
	    	
	    	// Get everything
	    	var img1 = response.split("@@")[0];
	    	var img2 = response.split("@@")[1];
	    	var w_vote_count = response.split("@@")[2];
	    	var w_election_count = response.split("@@")[3];
	    	var l_vote_count = response.split("@@")[4];
	    	var l_election_count = response.split("@@")[5];
	    	
	    	// Set new images for election
	    	document.getElementById('img1').src = "./pics/" + img1;
	    	document.getElementById('img2').src = "./pics/" + img2;
	    	
	    	// Set winner
	    	document.getElementById('winner_votes').innerHTML = "Votes : " + w_vote_count;
	    	var percent = Math.round((w_vote_count / w_election_count) * 100);
	    	document.getElementById('winner_percent').innerHTML = "Win Rate : " + percent + "%";
	    	
	    	// Set loser
	    	document.getElementById('loser_votes').innerHTML = "Votes : " + l_vote_count;
	    	var percent = Math.round((l_vote_count / l_election_count) * 100);
	    	document.getElementById('loser_percent').innerHTML = "Win Rate : " + percent + "%";
	    }
    }	
	
	// Winner
	// Just some regex no big deal really
	var pathExtract = /^[a-z]+:\/\/\/?[^\/]+(\/[^?]*)/i;
	var winner = (pathExtract.exec(event.target.src))[1].slice(1);
	
	// Loser
	if (event.target.id === 'img1')	{ var loser_id = 'img2'; }
	else { var loser_id = 'img1'; }
	var loser = document.getElementById(loser_id).src
	loser = pathExtract.exec(loser)[1].slice(1);
	
	// Set winner / loser source and href
    document.getElementById('winner').src = winner;
    document.getElementById('loser').src = loser;
    
	var id1 = winner.match(/(\d+)$/)[1];
    var id2 = loser.match(/(\d+)$/)[1];
    
	document.getElementById('link1').href = "http://baby-war.99k.org/individual.php?id=" + id1
    document.getElementById('link2').href = "http://baby-war.99k.org/individual.php?id=" + id2
    
    
    // Probably not the best solution dawg
	var query = "?winner=" + winner.split("/")[1] + "&loser=" + loser.split("/")[1];
	ajaxRequest.open("GET", "vote.php" + query, true);
	ajaxRequest.send(null);

}
    </script>  
</head>

<!-- Head ends / Body begins -->

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
