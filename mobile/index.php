<?php
error_reporting(E_ALL);

// i18n support information here
$language = 'en_GB';

if(isset($_GET['locale']) && $_GET['locale'] == "ca") $language = "ca_ES";

$newLocale=setlocale (LC_ALL, $language);

// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, ".././locale");
textdomain($domain);
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo gettext("Give Cats! Make your internet warm and fuzzy!"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../assets/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link href="../assets/css/home.css" rel="stylesheet" media="screen">
	
	<meta property="og:image" content="http://give.cat/assets/img/CatBackground.jpg"/>
  </head>
  <body class="no-background">
  	<div id="wrap" class="container-fluid">
  		<div class="alert alert-info alert-block visible-desktop">
  			<button type="button" class="close" data-dismiss="alert">&times;</button>
  			<?php gettext("<h4>Wait a minute...</h4>
  			You're on a desktop aren't you? You can stay but we have another bit for you <a href='/'>here</a>."); ?>
  		</div>
    	<div class="row-fluid">
    		<div class="span6 text-center vertical-center hidden-phone">
    			<h1><?php echo gettext("Meow!"); ?></h1>
				<p class="lead"><?php echo gettext("Turn a boring news site into the cutest place on earth. Hide your friend's ugly face with something squishy."); ?></p>
				<p><?php echo gettext("Drag this button on to your bookmark bar and click it for insta-cute on any website."); ?></p>
				<div class="row-fluid">
					<a class="btn btn-large btn-primary" href='javascript: function Cat(orientation,imageid){this.orientation=orientation;this.imageurl="http://give.cat/api/img/"+imageid+".jpg";}var giveCat={init:function(myCats){this.myCats=myCats;},landscape:function(){return this.myCats.filter(function(myCats){return myCats.orientation==="hor";});},portrait:function(){return this.myCats.filter(function(myCats){return myCats.orientation==="ver";});},square:function(){return this.myCats.filter(function(myCats){return myCats.orientation==="squ";});}};function Randomize(images){return Math.floor(Math.random()*images.length);}var myCats=[new Cat("hor",1),new Cat("hor",2),new Cat("hor",3),new Cat("hor",4),new Cat("hor",5),new Cat("hor",6),new Cat("hor",7),new Cat("hor",8),new Cat("hor",9),new Cat("hor",10),new Cat("hor",11),new Cat("ver",12),new Cat("ver",13),new Cat("ver",14),new Cat("ver",15),new Cat("ver",16),new Cat("ver",17),new Cat("ver",18),new Cat("squ",19),new Cat("squ",20),new Cat("squ",21),new Cat("squ",22),new Cat("squ",23),new Cat("squ",24),new Cat("squ",25),new Cat("hor",26)];function imageOrientation(image){var proportion=image.height/image.width;if(proportion>1)return"portrait";else if(proportion===1)return"square";else if(proportion<1)return"landscape";}var tempCatScript=null,catAttempts;function catsBeGot(data){var tempCats=new Array();for(var key in data.cats){tempCats[tempCats.length]=new Cat(data.cats[key],key);}if(tempCats.length>0)myCats=tempCats;randomizeCats();}function randomizeCats(){giveCat.init(myCats);var images=document.getElementsByTagName("img"),length=images.length;for(var i=0;i<length;i++){var orientation=imageOrientation(images[i]);if(orientation==="landscape"){var number=Randomize(giveCat.landscape());var img=giveCat.landscape()[number];images[i].src=img.imageurl;}else if(orientation==="square"){var number=Randomize(giveCat.square());var img=giveCat.square()[number];images[i].src=img.imageurl;}else if(orientation==="portrait"){var number=Randomize(giveCat.portrait());var img=giveCat.portrait()[number];images[i].src=img.imageurl;}}}function jsLoader(){var o=this;o.timer=function(t,i,d,f,fend,b){if(t==-1||t>0){setTimeout(function(){b=(f())?1:0;o.timer((b)?0:(t>0)?--t:t,i+((d)?d:0),d,f,fend,b);},(b||i<0)?0.1:i);}else if(typeof fend=="function"){setTimeout(fend,1);}};o.addEvent=function(el,eventName,eventFunc){if(typeof el!="object"){return false;}if(el.addEventListener){el.addEventListener(eventName,eventFunc,false);return true;}if(el.attachEvent){el.attachEvent("on"+eventName,eventFunc);return true;}return false;};o.require=function(s,delay,baSync,fCallback,fErr){tempCatScript=document.createElement("script"),oHead=document.getElementsByTagName("head")[0];if(!oHead){return false;}setTimeout(function(){var f=(typeof fCallback=="function")?fCallback:function(){};fErr=(typeof fErr=="function")?fErr:function(){alert("require: Cannot load resource -"+s);},fe=function(){if(!tempCatScript.__es){tempCatScript.__es=true;tempCatScript.id="failed";fErr(tempCatScript);}};tempCatScript.onload=function(){tempCatScript.id="loaded";f(tempCatScript);};tempCatScript.type="text/javascript";tempCatScript.async=(typeof baSync=="boolean")?baSync:false;tempCatScript.charset="utf-8";o.__es=false;o.addEvent(tempCatScript,"error",fe);o.timer(15,1000,0,function(){return(tempCatScript.id=="loaded");},function(){if(tempCatScript.id!="loaded"){fe();}});tempCatScript.src=s;setTimeout(function(){try{oHead.appendChild(tempCatScript);}catch(e){fe();}},1);},(typeof delay=="number")?delay:1);return true;};}(function(document){var ol=new jsLoader();ol.require("http://give.cat/api/cats.php?callback=catsBeGot",800,true,function(){},function(){randomizeCats();});})(document);'><?php echo gettext("Give Cats!"); ?></a>
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
    <script src="../assets/js/bootstrap.min.js"></script>
    <script>
	    $(document).load(function(){
		    //Check if a button is clicked
		    	//Append the contents of a JS file to window.location
		    	
		    //Display the bookmark instructions
		    function displayBookmarkInstructions(){
			    //Hide first bit and show second
			    //ARIA enables please
		    }
		    	
		    //Load a test page (with boring photos - maybe dogs)
		    function displayTestPage(){
			    //Hide bookmark instructions
			    //Test the bookmark
		    }
		    
		    //Share me on twitter or FB
		    function displaySharePage(){
			    //Hide test page
			    //Ask to share on twitter and FB
		    } 
	    });
    </script>
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
