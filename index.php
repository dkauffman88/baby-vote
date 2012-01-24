<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:m="http://schemas.microsoft.com/office/2004/12/omml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en"><head>
  
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

  
  <meta name="keywords" content="baby,baby war,babies,best,cute,cutest,cuter,choose,cute baby,cute babies,smiling babies,smiling baby,happy baby" />
  <title>Baby War - Vote for the cutest baby!</title>

  
  
  <style type="text/css">
.style1 {
text-align: center;
}
.style2 {
text-align: right;
}

.imgcontainer {
position:relative;
float:right;
}

.imgcontainer1 {
position:relative;
float:left;
}
.stylepink {
color:#FF00FF;
text-align: center;

}
.styleblue {
color:#56BAEC;
text-align: center;

}


.caption1 {
position:absolute;
bottom:10;
left:0;
text-align:center;
font-size:x-large;
background:#fff;
width:100%;
color:#000;
}

  </style>
  
  <script language="JavaScript"><!--

var pictures = ["Baby Blues", "Ballet Baby", "Bubble Cheeks", "Exhausted", "Laughter", "Not Enough Toys", "A Handful", "Blinded By The Light", "Blue Eyed Blondie", "Bridesmaid", "Bubble Bath", "Bubble Fun", "Cereal Again", "Charlie Brown", "Chubby Cheeks", "Cold Water", "Cool Pink", "Counting Sheep", "Dark Eyes", "Do I Know You", "Drool Drop", "Elephant Surprise", "Fish Lips", "Flower Child", "Fly Away Hair", "Future Business Man", "Future Ceo", "Giggle", "Hi Grandma", "Hidden Smile", "I Like Hot Dogs", "I See You", "Lacy Blue", "Little Budda", "Merry Maid", "Need More Curls", "New Slippers", "On The Move", "Outside Fun", "Peekaboo", "Pretty In Purple", "Red Rover", "Rudy", "Santa's Elf", "Scared Silly", "Shark Tank", "Snow Angel", "Soft & Dangerous", "Sweet Dreams", "Sweet Fingers", "Sweet Pose", "Tell Me Again", "Tongue Tied", "Toothless Smile", "Troubled Times", "Watch Me Crawl", "What's Going On", "Whistling Willy", "Why Not", "Wonder Child", "Wrinkles"];

var t = 001;
var h = pictures.length-1;
var r = (Math.floor(Math.random()*h)+1);
var s = (Math.floor(Math.random()*h)+1);
if (r=s)
{
s = r--;
}

var a = 999 - r;
var b = 999 - s;
var w = 999 - t;
var picture = pictures[r];
var picture1 = pictures[s];
var picturew = pictures[t];
// --></script>
  <meta content="Daniel Kauffman" name="author" />

<script type=text/javascript>

function voted(event){

    // Ajax stuff
	var ajaxRequest = new XMLHttpRequest;  // The variable that makes Ajax possible!
	
	ajaxRequest.onreadystatechange = function(){
	    if(ajaxRequest.readyState == 4){
	    	//document.getElementById('winner').appendChild(ajaxRequest.responseText);
	    	var response = ajaxRequest.responseText;
	    	//alert(response);
	    	var img1 = response.split("@@")[0];
	    	var img2 = response.split("@@")[1];
	    	var vote_count = response.split("@@")[2];
	    	
	    	//alert(img1);
	    	//alert(img2);
	    	document.getElementById('img1').src = img1;
	    	document.getElementById('img2').src = img2;
	    	document.getElementById('winner_votes').innerHTML = "Votes : " + vote_count;
	    }
    }
	
	// Just some regex no big deal really
	var pathExtract = /^[a-z]+:\/\/\/?[^\/]+(\/[^?]*)/i;
    var path = (pathExtract.exec(event.target.src))[1].slice(1);
    document.getElementById('winner').src = path;
    //alert(path)
    
	var query = "?path=" + path;
	ajaxRequest.open("GET", "vote.php" + query, true);
	ajaxRequest.send(null);
	
	
	//alert('down here dawg');

}

</script>  
</head>



<body style="color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);" alink="fuchsia" link="fuchsia" vlink="#990099">
<div style="text-align: center;"><img style="width: 88px; height: 88px;" alt="B" src="../letters/b.jpg" /><img style="width: 88px; height: 88px;" alt="A" src="../letters/a.jpg" /><img style="width: 88px; height: 88px;" alt="B" src="../letters/b.jpg" /><img style="width: 88px; height: 88px;" alt="Y" src="../letters/y.jpg" /><img style="width: 88px; height: 88px;" alt="-" src="../letters/-.jpg" /><img style="width: 88px; height: 88px;" alt="V" src="../letters/largev.jpg" /><img style="width: 88px; height: 88px;" alt="O" src="../letters/o.jpg" /><img style="width: 88px; height: 88px;" alt="T" src="../letters/t.jpg" /><img style="width: 88px; height: 88px;" alt="E" src="../letters/e.jpg" /></div>

<p style="color: fuchsia;" class="stylepink"><a rel="me" href="../index.html"><strong>Home</strong></a><strong>&nbsp;|&nbsp;<a rel="me" href="search.html">Search</a>&nbsp;|&nbsp;<a rel="me " href="beautiful.html">Beautiful
Babies</a>&nbsp;|&nbsp;<a rel="me" href="ugly.html">Ugly Babies</a>&nbsp;|&nbsp;<a rel="tag" href="upload.html">Submit
Baby Pictures</a>&nbsp;|&nbsp;<a rel="tag" href="about.html">About Baby War</a>&nbsp;|</strong><o:p><strong>
<a rel="tag" href="register.html">Register</a> | <a rel="tag" href="login.html">Login</a></strong></o:p></p>

<table style="width: 100%;">

<!-- MSTableType="layout" --> <tbody>
    <tr>
      <td>
      <div align="center"> <span class="styleblue"><strong>Choose The
Cutest Baby!</strong></span><br />
      <table style="width: 700px;" border="0" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
          
          
                <!-- The winner from last time dawg -->
                <td style="vertical-align: top; text-align: center;" class="style2">
                    <div style='width: 200px; border: solid red thin; overflow: auto;'>
                    <p id = 'winner_votes' style = 'border: solid blue thin;'></p>
                    <img id = 'winner' src='' width='200px'/><br/>
                    </div>
                <br/>
                </td>
            
            
            <td style="vertical-align: top; width: 20px;">&nbsp;<br />
            </td>
            
                <!-- Here goes image 1 -->
                <td style="vertical-align: top;" class="style2">
               <?php
                // Database stuff
                $user="642393_ed";
                $password="williamandmary";
                //$database="baby-war_99k_pic";
                $database="babywar_99k_pic";

                mysql_connect("localhost",$user,$password);
                @mysql_select_db($database) or die( "Unable to select database");

                // Grab random image 1
                $query = "SELECT path FROM babys ORDER BY RAND();";
                $output = mysql_query($query);
                $image = mysql_result($output, 0);
                mysql_close();
                echo "<div class='imgcontainer'><image id='img1' onclick='voted(event)' src='$image' class='captioned' width='400' height='300'/></div>";
                ?>
                <div id='new_img'></div>
                </td>
            
            
            <td class="style1" alt="VS" title="VS">
            <p class="MsoNormal" align="center"> <img style="width: 60px; height: 60px;" alt="-" src="../letters/smallv.jpg" /></p>
            <p class="MsoNormal" align="center"> <img style="width: 60px; height: 60px;" alt="-" src="../letters/s.jpg" />&nbsp;</p>
            </td>
            
            
                <!-- Here goes image 2 -->
                <td style="vertical-align: top;">
                <?php
                // Database stuff
                $user="642393_ed";
                $password="williamandmary";
                //$database="baby-war_99k_pic";
                $database="babywar_99k_pic";

                mysql_connect("localhost",$user,$password);
                @mysql_select_db($database) or die( "Unable to select database");

                // Grab random image 1
                $query = "SELECT path FROM babys ORDER BY RAND();";
                $output = mysql_query($query);
                $image = mysql_result($output, 0);
                mysql_close();
                echo "<div class='imgcontainer'><image id='img2' onclick='voted(event)' src='$image' class='captioned' width='400' height='300'/></div>";
                ?>
                </td>
            
            
            <td style="vertical-align: top; width: 20px;">&nbsp;<br />
            </td>
            <td class="style1" alt="atlanticbrideandbaby.com" title="atlanticbrideandbaby.com">
            <p class="MsoNormal" align="center"> <a href="http://www.atlanticbrideandbaby.theaspenshops.com/"><img style="width: 200px;" alt="ad" src="../letters/atlanticbrideandbaby.gif" /></a> </p>
            <p class="MsoNormal" align="center"> <a href="http://www.atlanticbrideandbaby.theaspenshops.com/"><img style="width: 200px;" alt="ad" src="../letters/atlanticbrideandbaby.gif" /></a></p>
            </td>
          </tr>
        </tbody>
      </table>
      <p class="stylepink"><a rel="me" href="index.html"><strong>Draw!</strong></a><br />
      </p>
      <p> </p>
      <p class="stylepink"><!-- Place this tag where you want the +1 button to render -->
      <g:plusone><!-- Place this render call where appropriate -->
      <script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
      </script></g:plusone></p>
      </div>
      </td>
    </tr>
  </tbody>
</table>

</body></html>
