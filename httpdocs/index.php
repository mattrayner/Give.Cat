<?php
error_reporting(E_ALL);

// i18n support information here
$language = 'en_GB';

if(isset($_GET['locale']) && $_GET['locale'] == "ca") $language = "ca_ES";

$newLocale=setlocale (LC_ALL, $language);

//echo "After i18n:$newLocale\n\n";

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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/home.css" rel="stylesheet" media="screen">
	
	<meta property="og:image" content="http://give.cat/assets/img/CatBackground.jpg"/>
  </head>
  <body class="no-background">
  	<div id="wrap" class="container-fluid">
    	<div class="row-fluid">
    		<div class="span6 text-center vertical-center hidden-phone">
    			<h1><?php echo gettext("Meow!"); ?></h1>
				<p class="lead"><?php echo gettext("Turn a boring news site into the cutest place on earth. Hide your friend's ugly face with something squishy."); ?></p>
				<p><?php echo gettext("Drag this button on to your bookmark bar and click it for insta-cute on any website."); ?></p>
				<div class="row-fluid">
					<a class="btn btn-large btn-primary" href='javascript: function Cat(orientation,imageurl){this.orientation=orientation;this.imageurl=imageurl}var giveCat={init:function(myCats){this.myCats=myCats},landscape:function(){return this.myCats.filter(function(myCats){return myCats.orientation==="landscape"})},portrait:function(){return this.myCats.filter(function(myCats){return myCats.orientation==="portrait"})},square:function(){return this.myCats.filter(function(myCats){return myCats.orientation==="square"})}};function Randomize(images){return Math.floor(Math.random()*images.length)}var myCats=[new Cat("landscape","http://give.cat/assets/img/cat/aww/l1.jpg"),new Cat("landscape","http://give.cat/assets/img/cat/aww/l2.jpg"),new Cat("landscape","http://give.cat/assets/img/cat/aww/l3.jpg"),new Cat("landscape","http://give.cat/assets/img/cat/aww/l4.jpg"),new Cat("landscape","http://give.cat/assets/img/cat/aww/l5.jpg"),new Cat("landscape","http://give.cat/assets/img/cat/aww/l6.jpg"), new Cat("landscape","http://give.cat/assets/img/cat/aww/l7.jpg"),new Cat("landscape","http://give.cat/assets/img/cat/aww/l8.jpg"),new Cat("landscape","http://give.cat/assets/img/cat/aww/l9.jpg"),new Cat("landscape","http://give.cat/assets/img/cat/aww/l10.jpg"),new Cat("landscape","http://give.cat/assets/img/cat/aww/l11.jpg"),new Cat("landscape","http://give.cat/assets/img/cat/aww/l12.jpg"),new Cat("portrait","http://give.cat/assets/img/cat/aww/p1.jpg"),new Cat("portrait","http://give.cat/assets/img/cat/aww/p2.jpg"),new Cat("portrait","http://give.cat/assets/img/cat/aww/p3.jpg"),new Cat("portrait","http://give.cat/assets/img/cat/aww/p4.jpg"),new Cat("portrait","http://give.cat/assets/img/cat/aww/p5.jpg"),new Cat("portrait","http://give.cat/assets/img/cat/aww/p6.jpg"),new Cat("portrait","http://give.cat/assets/img/cat/aww/p7.jpg"),new Cat("square","http://give.cat/assets/img/cat/aww/s1.jpg"),new Cat("square","http://give.cat/assets/img/cat/aww/s2.jpg"),new Cat("square","http://give.cat/assets/img/cat/aww/s3.jpg"),new Cat("square","http://give.cat/assets/img/cat/aww/s4.jpg"),new Cat("square","http://give.cat/assets/img/cat/aww/s5.jpg"),new Cat("square","http://give.cat/assets/img/cat/aww/s6.jpg"),new Cat("square","http://give.cat/assets/img/cat/aww/s7.jpg")];function imageOrientation(image){var proportion=image.height/image.width;if(proportion>1)return"portrait";else if(proportion===1)return"square";else if(proportion<1)return"landscape"}(function(document){giveCat.init(myCats);var images=document.getElementsByTagName("img"),length=images.length;console.log("Number of images found: "+length);for(var i=0;i<length;i++){var orientation=imageOrientation(images[i]);if(orientation==="landscape"){var number=Randomize(giveCat.landscape());var img=giveCat.landscape()[number];images[i].src=img.imageurl}else if(orientation==="square"){var number=Randomize(giveCat.square());var img=giveCat.square()[number];images[i].src=img.imageurl}else if(orientation==="portrait"){var number=Randomize(giveCat.portrait());var img=giveCat.portrait()[number];images[i].src=img.imageurl}console.log("Catification from http://get.cat/ & Matthew Rayner http://mattrayner.co.uk")}})(document);//GiveCats created by Matthew Rayner mattrayner.co.uk'><?php echo gettext("Give Cats!"); ?></a>
				</div>
    		</div>
    		
    		<div class="span6 hidden-phone"></div>
    		
    		<div class="span12 visible-phone semi-transparent">
	    		<h1><?php echo gettext("Meow!"); ?></h1>
	    		<p class="lead"><?php echo gettext("Thanks for coming! At the moment you need to use a computer or a tablet to use us (that's changing)."); ?></p>
	    		<p><?php echo gettext("Soon there'll be an iPhone app with all sorts of squishy goodies but until then, come back on something bigger :)"); ?></p>
    		</div>
    	</div>
    	<div id="push"></div>
  	</div>
  	<footer id="footer">Copyright &copy;2013 <a href="http://give.cat/">Give.Cat</a>. Created by <a href="http://www.twitter.com/mattrayner" target="_blank>">Matt Rayner</a>, inspired by the genius of <a href="http://heygirl.io/" target="_blank">Hey Girl</a>. <a href="http://give.cat/<?php if(!isset($_GET['locale'])){echo "?locale=ca";} ?>"><?php echo gettext("Parla catal&#133;?"); ?></a> - Fork me on <a href="https://github.com/mattrayner/Give.Cat" target="_blank">GitHub</a>.</footer>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
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