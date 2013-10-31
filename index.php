<?php
error_reporting(E_ALL);

// i18n support information here
$language = 'en_GB';

if(isset($_GET['locale']) && $_GET['locale'] == "ca") $language = "ca_ES";

$newLocale=setlocale (LC_ALL, $language);

// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, "./locale");
textdomain($domain);

?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo gettext("Give Cats! Make your internet warm and fuzzy!"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css">
	
	<meta property="og:image" content="http://give.cat/assets/img/CatBackground.jpg"/>
  </head>
  <body class="no-background">
  	<div class="alert alert-danger">We're making some changes! Bare with us as we make Give Cat bigger and better!</div>
  	<div id="wrap" class="container-fluid">
    	<div class="row-fluid">
    		<div class="span6 text-center vertical-center hidden-phone">
    			<h1><?php echo gettext("Meow!"); ?></h1>
				<p class="lead"><?php echo gettext("Turn a boring news site into the cutest place on earth. Hide your friend's ugly face with something squishy."); ?></p>
				<p><?php echo gettext("Drag this button on to your bookmark bar and click it for insta-cute on any website."); ?></p>
				<div class="row-fluid">
					<a class="btn btn-large btn-primary" href='<?php
						$file = file_get_contents('GiveCatJS/givecat.database.min.js', FILE_USE_INCLUDE_PATH); 
						echo "javascript: ".$file;
						?>'><?php echo gettext("Give Cats!"); ?></a>
				</div>
    		</div>
    	</div>
    	<div id="push"></div>
  	</div>
  	<footer id="footer">Copyright &copy;2013 <a href="http://give.cat/">Give.Cat</a>. Created by <a href="http://www.twitter.com/mattrayner" target="_blank>">Matt Rayner</a>, inspired by the genius of <a href="http://heygirl.io/" target="_blank">Hey Girl</a>. <a href="http://give.cat/<?php if(!isset($_GET['locale'])){echo "?locale=ca";} ?>"><?php echo gettext("Parla catal&#133;?"); ?></a> - Fork me on <a href="https://github.com/mattrayner/Give.Cat" target="_blank">GitHub</a>.</footer>
    <script src="http://code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-44617939-1', 'give.cat');
	  ga('send', 'pageview');
	</script>
  </body>
</html>