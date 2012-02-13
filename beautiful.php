<!DOCTYPE HTML>
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
<section class="content">
    
        <?php
        
        include 'db_pass.php';

        mysql_connect("localhost",$user,$password);
        @mysql_select_db($database) or die( "Unable to select database");

        // Grab random image 1
        $query = "SELECT path, id, votes FROM babys WHERE live=1 ORDER BY votes DESC;";
        $output = mysql_query($query);
        $images = Array(10);
        for ($i = 0; $i < 10; $i+=1){ // Get items from db
            $row = mysql_fetch_array($output, MYSQL_ASSOC);
            $images[$i] = $row;
        }
        
        for ($i = 9; $i >= 0; $i-=1){ // Arrange them in reverse order
            $path = $images[$i]['path'];
            $id = $images[$i]['id'];
            $votes = $images[$i]['votes'];
            $j = $i + 1;
            echo "<p class='title'>#$j</p><p class='value'>$votes votes</p><br/><a href='http://baby-war.99k.org/individual.php?id=$id'><image class='baby' id='$i' src='./pics/$path'/></a><br/><br/><br/>\n";
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
