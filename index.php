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
	    	
	    	// Set new images
	    	document.getElementById('img1').src = img1;
	    	document.getElementById('img2').src = img2;
	    	
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

    document.getElementById('winner').src = winner;
    document.getElementById('loser').src = loser;
	var query = "?winner=" + winner + "&loser=" + loser;
	ajaxRequest.open("GET", "vote.php" + query, true);
	ajaxRequest.send(null);

}
    </script>  
</head>

<!-- Head ends / Body begins -->

<body>
<header>
<img alt="B" src="../letters/b.jpg" />
<img alt="A" src="../letters/a.jpg" />
<img alt="B" src="../letters/b.jpg" />
<img alt="Y" src="../letters/y.jpg" />
<img alt="-" src="../letters/-.jpg" />
<img alt="V" src="../letters/largev.jpg" />
<img alt="O" src="../letters/o.jpg" />
<img alt="T" src="../letters/t.jpg" />
<img alt="E" src="../letters/e.jpg" />
</header>

<nav>
<a href="./index.php"><strong>Home</strong></a> | 
<a href="./submit.html"><strong>Submit Baby Pictures</strong></a>
</nav>

<!-- Content Begins Here -->
<section class="vote">
    <div>
        <div class="winner"> <!-- Winner image from last election -->
            <p>Winner</p>
            <hr/>
            <p id = 'winner_votes'></p>
            <p id = 'winner_percent'></p>
            <img id = 'winner' src='' width='150px'/>
        </div>
        
        <div class="winner">
            <p>Loser</p>
            <hr/>
            <p id = 'loser_votes'></p>
            <p id = 'loser_percent'></p>
            <img id = 'loser' src='' width='150px'/>
        </div>
    </div>
    
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
        
        echo "<image class='baby' id='img1' onclick='voted(event)' src='$image1' width='300'/>";
        echo "<div class='vs'><img src='./letters/smallv.jpg'/><br/>";
        echo "<img src='./letters/s.jpg' /></div>";
        echo "<image class='baby' id='img2' onclick='voted(event)' src='$image2' width='300'/>";
        
        ?>
        
    </div>
    <br/>
    <br/>
</section>
<!-- Content Ends Here -->

<footer>
    <strong>Choose The Cutest Baby!</strong></span><br/>
    <a id='draw' href="./index.php"><strong>Draw!</strong></a><br/>
      
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
