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
        <form enctype='multipart/form-data' method='post' action='./submit_user.php'>

            <h3>Signup to keep track of your baby pictures!</h3>
            
            <textarea name="terms and conditions" rows="22" cols="85" readonly="readonly">Disclaimer:
            By submitting materials (including pictures) or other information to Baby-Vote.com ("Baby Vote"), you grant Baby Vote a perpetual, royalty-free license to use, reproduce, modify, publish, distribute, and otherwise exercise all copyright and publicity rights with respect to that information at its sole discretion. This includes storing information or content received on Baby Votes servers and incorporating it in other works in any media now known or later developed. If you do not agree nor want Baby Vote to have these rights it is suggested that you do not submit information or materials to this website. Baby Vote reserves the right to delete, modify, remove, arrange submissions or data at any point at its discretion without notice to the user. By agreeing to the terms of this disclaimer, you are also acknowledging that any photos you are submitting are owned by the you, the user. Baby Vote is not liable for copy written works, or any consequential legal damages resulting from their submission by our users. Any legal damages arising from the submission of copy written works unlawfully will be fully born by the user who submitted such work. Baby Vote does not permit any nude images of babies or children on its website. Any nude content submitted will be immediately removed and deleted. Baby Vote reserves the right to report nude photos to the proper authorities.            </textarea><br/>
            </textarea>

            <label for='username'>username</label>
            <input id='username' name='username' type='text'/>
            <br/>

            <label for='password'>password</label>
            <input id='password' name='password' type='password'/>
            <br/>

            <input type='submit' value='Submit'/>     
        
        </form>
    
    </div>
</section>
<!-- Content Ends Here -->

<footer>  
</footer>
</body>
</html>
