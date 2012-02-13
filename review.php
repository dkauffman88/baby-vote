<!DOCTYPE HTML>
<html> 
<head>
    <META http-equiv="baby-vote" content="text/html; charset=utf-8"/>
    <title>baby-vote.com</title>
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
<section class="content">
    <div class='wide'>
    <form enctype='multipart/form-data' method='post' action='./review_up.php'>
        <?php
        include 'db_pass.php';  
    
        mysql_connect("localhost",$user,$password);
        @mysql_select_db($database) or die( "Unable to select database");
    
        // Grab random image 1
        $query = "SELECT path, id FROM babys WHERE live=0;";
        $output = mysql_query($query);
        
        $i = 0;
        while($row = mysql_fetch_array($output, MYSQL_ASSOC)){
            $path = $row['path'];
            $id = $row['id'];
            echo "<div><img src='./pics/$path'><br/><input name='$id' type='checkbox' value='$id'/> ^</div>\n";
            $i += 1;
        }

        mysql_close();
        ?>
    <input type='submit' value='Submit' />
    </form>
    </div>
</section>
<!-- Content Ends Here -->

<footer>  
</footer>
</body>
</html>
