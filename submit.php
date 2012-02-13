<!DOCTYPE HTML>
<html>
<head>

    <META http-equiv="baby-vote" content="text/html; charset=utf-8"/>
    <META name="description" content="baby-vote.com vote on the cutest baby pictures on the web!"/>
    <META name="keywords" content="baby,baby war,babies,best,cute,cutest,cuter,choose,cute baby,cute babies,smiling babies,smiling baby,happy baby" />
    <link rel="stylesheet" type="text/css" href="style.css" charset="utf-8"/>
    <title>Submit - baby-vote.com</title>

  
	<style type="text/css">

.big {
				font-size: large;
}

</style>

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
<section class='content'>
    <form enctype='multipart/form-data' method='post' action='./submit_image.php'>
        <div class='center'>
            <h3>Submit your baby pictures for a chance to win!</h3>
            
            <textarea name="terms and conditions" rows="22" cols="85" readonly="readonly">Disclaimer:
            By submitting materials (including pictures) or other information to Baby-Vote.com ("Baby Vote"), you grant Baby Vote a perpetual, royalty-free license to use, reproduce, modify, publish, distribute, and otherwise exercise all copyright and publicity rights with respect to that information at its sole discretion. This includes storing information or content received on Baby Votes servers and incorporating it in other works in any media now known or later developed. If you do not agree nor want Baby Vote to have these rights it is suggested that you do not submit information or materials to this website. Baby Vote reserves the right to delete, modify, remove, arrange submissions or data at any point at its discretion without notice to the user. By agreeing to the terms of this disclaimer, you are also acknowledging that any photos you are submitting are owned by the you, the user. Baby Vote is not liable for copy written works, or any consequential legal damages resulting from their submission by our users. Any legal damages arising from the submission of copy written works unlawfully will be fully born by the user who submitted such work. Baby Vote does not permit any nude images of babies or children on its website. Any nude content submitted will be immediately removed and deleted. Baby Vote reserves the right to report nude photos to the proper authorities.            </textarea><br/>
            </textarea>
        </div>
        <p>We recommend uploading images that are 300 x 400 pixels or 3:4 aspect ratio for best results.</p>
        <?php
        require_once('recaptchalib.php');
        $publickey = "6Ldhkc0SAAAAAEh7XaYtPJSVHTpC2B-nh4wSic8I"; // you got this from the signup page
        echo recaptcha_get_html($publickey);
        ?>
        <span class="big">Image Path :&nbsp;&nbsp; </span>
		<input id='path' name='pic' type='file' style="width: 386px; height: 34px; font-size: large" /><input type='submit' value='Submit' style="height: 34px; width: 107px; font-size: large;"/>
    </form>
</section>

</body></html>
