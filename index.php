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
<html lang="en" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="News websites getting you down? Can't face another look at 9gag? Or are you just fed up of looking at your friend's ugly faces? - You've come to the right place! Give Cat replaces all of the images on a website with adorable cats - brightening your day and improving your life. Need I say more?">
    <meta name="author" content="Matt Rayner <http://www.mattrayner.co.uk/>">

    <title><?php echo gettext("Give Cat!"); ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/default.css">
      
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

    <!-- Favicon code -->
    <link rel="icon" type="image/png" href="http://give.cat/assets/img/gc-favicon.png">
    <link rel="apple-touch-icon" href="http://give.cat/assets/img/gc-57.png">  
    <link rel="apple-touch-icon" sizes="72x72" href="http://give.cat/assets/img/gc-72.png">  
    <link rel="apple-touch-icon" sizes="114x114" href="http://give.cat/assets/img/gc-114.png">  
    
    <meta name="msapplication-TileImage" content="http://give.cat/assets/img/gc-144.png">
    <meta name="msapplication-TileColor" content="#00adef">

	  <!-- Facebook Image -->
		<meta property="og:url" content="http://give.cat/"/>
		<meta property="og:title" content="Give Cat - Making the internet a squishier place!"/>
		<meta property="og:description" content="News websites getting you down? Can't face another look at 9gag? Or are you just fed up of looking at your friend's ugly faces? - You've come to the right place! Give Cat replaces all of the images on a website with adorable cats - brightening your day and improving your life. Need I say more?"/>
	  <meta property="og:image" content="http://give.cat/assets/img/gc-facebook-update.jpg"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 7]>
      <style type="text/css">a,img { behavior: url("assets/scripts/iepngfix.htc") }</style>
    <![endif]-->
  </head>
	<body>
    <div class="navbar navbar-trans navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand ir gc-logo-sm" href="#"><?php echo gettext("give<strong>cat</strong>"); ?></a>
        </div>
        
				<p class="navbar-text pull-center full-height-navbar" id="progresser">
          <span class="progress-dot progress-dot-1 active">•</span>
          <span class="progress-dot progress-dot-2">•</span>
          <span class="progress-dot progress-dot-3">•</span>
          <span class="progress-dot progress-dot-4">•</span>
          <span class="progress-dot progress-dot-5">•</span>
        </p>
      </div>
    </div>
		
		<!-- Initial call to action -->
    <div class="row blue-box intital-margin">
      <div class="container">
        <h3 class="text-center light-blue-text margin-top margin-bottom"><?php echo gettext("Get the latest version:"); ?> <a class="btn btn-lg btn-default btn-white" href=<?php echo("'javascript: ".grabBookmarklet()."'"); ?>><?php echo gettext("Give Cat!"); ?></a><button class="info-button ir" data-toggle="modal" data-target="#myModal">i</button></h3>  
      </div>
    </div>
		
		<!-- Main welcome page -->
    <div class="row page1 margin-top">
      <div class="container">
        <div class="row">
          <h1 class="gc-logo-lg pull-center ir"><?php echo gettext("give<strong>cat</strong>"); ?></h1>
        </div>
        
				<div class="row">
          <div class="col-md-8 col-md-offset-2 gc-lead text-center">
            <?php echo gettext("News websites getting you down? Can't face another look at 9gag?<br/>Or are you just fed up of looking at your friend's ugly faces?"); ?>
            <span class="callout"><?php echo gettext("You've come to the right place..."); ?></span>
          </div>
        </div>
        
				<div class="row">
          <div class="col-md-2 col-md-offset-5 gc-scroller margin-top pull-center text-center">
            Scroll Down
            <div class="pull-center animated-arrows">
              <span style="opacity: 0.4;" data-fadeIn="true">▼</span>
              <span style="opacity: 0.6;" data-fadeIn="true">▼</span>
              <span style="opacity: 0.8;" data-fadeIn="true">▼</span>
              <span style="opacity: 1.0;" data-fadeIn="true">▼</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    
		<!-- What is Give Cat?  -->
		<div class="row page2">
      <div class="container">
        <div class="row blue-padder">
          <div class="col-md-7 pull-right">
            <h2 class="text-center blue-text">What's give<strong>cat</strong>?</h2>
            
						<!-- Cycler - show how GC works on select websites -->
						<div class="row">
              <div class="row cycle-container pull-center-important">
                <div class="cycle1 ir">BBC</div>
                <div class="cycle2 ir">BBC - Cats</div>
                <div class="cycle3 ir">Facebook</div>
                <div class="cycle4 ir">Facebook - Cats</div>
                <div class="cycle5 ir">9gag</div>
                <div class="cycle6 ir">9gag - Cats</div>
              </div>
              
							<!-- Give Cat cycle caption -->
							<p class="gc-lead text-center margin-top"><?php echo gettext('This is what we do... Take <strong class="blue-text">all</strong> the pictures on a website and make them <strong class="blue-text">cats</strong>!'); ?></p>
            </div>
            
						<!-- Keep Going Arrows! -->
						<div class="row">
              <div class="col-md-2 col-md-offset-5 gc-scroller margin-top pull-center text-center">
                <?php echo gettext('Keep Going...'); ?>
                
								<!-- Arrows with initial opacity values -->
								<div class="pull-center animated-arrows">
                  <span style="opacity: 0.4;" data-fadeIn="true">▼</span>
                  <span style="opacity: 0.6;" data-fadeIn="true">▼</span>
                  <span style="opacity: 0.8;" data-fadeIn="true">▼</span>
                  <span style="opacity: 1.0;" data-fadeIn="true">▼</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        
				<div class="row">
          <hr>
          
					<h2 class="text-center blue-text"><?php echo gettext("Show<strong>me</strong>"); ?></h2>
          
					<div class="col-md-8 col-md-offset-2 gc-lead text-center margin-bottom">
            <?php echo gettext('Click on one of the pages below to see the change <strong class="blue-text">instantly</strong>!'); ?>
          </div>
          
					<div class="row margin-bottom">
            <div class="col-md-4 col-sm-6 col-xs-12 clicker clicker-1"></div>
            <div class="col-md-4 col-sm-6 col-xs-12 clicker clicker-2"></div>
            <div class="col-md-4 col-sm-6 col-xs-12 clicker clicker-3"></div>
            <div class="col-md-4 col-sm-6 col-xs-12 clicker clicker-4"></div>
            <div class="col-md-4 col-sm-6 col-xs-12 clicker clicker-5"></div>
            <div class="col-md-4 col-sm-6 col-xs-12 clicker clicker-6"></div>
          </div>
          <!--<h3 class="text-center blue-text margin-bottom">There are new cats added all the time!</h3>--><!--Removed as it seemed a bit out of place -->    
        </div>
      </div>
    </div>
		
		<!-- Main Call To Action page -->
    <div class="row page3 padding-bottom">
      <div class="container">
        <div class="col-md-6">
          <h2 class="white-text text-center text-shadow"><?php echo gettext("I can<strong>has</strong>?"); ?></h2>
          
					<div class="gc-lead white-text text-center text-shadow"><?php echo gettext('Yes, you can has... All you have to do is <strong class="purple-text">drag the button below</strong> to your <strong class="purple-text">bookmark bar</strong> like this:'); ?></div>
          
					<!-- Instructions box! -->
					<div class="row margin-top margin-bottom">
            <div class="pull-center drag-action"></div>
            
						<!-- Give Cat Bookmarklet button -->
						<div class="row text-center">
              <a href=<?php echo("'javascript: ".grabBookmarklet()."'"); ?> class="btn btn-default btn-white btn-lg">
								<?php echo gettext("Give Cat!"); ?>
							</a>
							<button class="info-button ir" data-toggle="modal" data-target="#myModal">i</button>
            </div>
          </div>
          
					<!-- There's More arrows -->
					<div class="row">
            <div class="col-md-2 col-md-offset-5 gc-scroller margin-top pull-center text-center text-shadow white-text">
              <?php echo gettext("There's More!"); ?>
              
							<div class="pull-center animated-arrows purple-arrows">
                <span style="opacity: 0.4;" data-fadeIn="true">▼</span>
                <span style="opacity: 0.6;" data-fadeIn="true">▼</span>
                <span style="opacity: 0.8;" data-fadeIn="true">▼</span>
                <span style="opacity: 1.0;" data-fadeIn="true">▼</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
		<!-- Test page! -->
		<div class="row page4">
      <div class="container margin-top">
        <h2 class="gc-logo-lg pull-center ir"><?php echo gettext("give<strong>cat</strong>"); ?></h2>
        
				<!-- Ugly dogs! -->
				<div class="row">
          <div class="col-md-8 col-md-offset-2 gc-lead text-center">
            <?php echo gettext('Below is a collection of <span class="blue-text">ugly dogs</span>, why not change that... Why not <span class="blue-text">give</span><strong>cat</strong>?'); ?>
          </div>
        </div>
        
				<div class="row dogs">
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/1.png" alt="Dog 1" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/2.png" alt="Dog 2" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/3.png" alt="Dog 3" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/4.png" alt="Dog 4" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/5.png" alt="Dog 5" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/6.png" alt="Dog 6" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/7.png" alt="Dog 7" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/8.png" alt="Dog 8" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/9.png" alt="Dog 9" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/10.png" alt="Dog 10" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/11.png" alt="Dog 11" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/12.png" alt="Dog 12" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/13.png" alt="Dog 13" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/14.png" alt="Dog 14" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/15.png" alt="Dog 15" class="img-thumbnail"></div>
          <div class="col-md-3 col-sm-4 col-xs-6"><img src="assets/img/dogs/16.png" alt="Dog 16" class="img-thumbnail"></div>
        </div>
        
				<!-- Retry button -->
				<div class="row">
          <h3 class="text-center blue-text margin-bottom"><?php echo gettext("Fancy another go?"); ?> <a class="btn btn-lg btn-default btn-white" href="#" id="reset-dogs"><?php echo gettext("Reset Dogs!"); ?></a></h3>  
        </div>
      </div>
    </div>
    
		<!-- Share page -->
		<div class="row page5 text-shadow text-center white-text padding-bottom">
      <div class="container">
        <div class="col-md-6 col-sm-8 col-xs-9 col-xxs">
          <h2><?php echo gettext("Share the<strong>awesome</strong>!"); ?></h2>
          
					<div class="gc-lead"><?php echo gettext("Pretty epic right? Why not tell your friends and share the love?"); ?></div>
          
					<div class="row margin-top margin-bottom">
						<!-- Facebook and twitter Sharers -->
            <div class="sharer-container pull-center">
              <a href="https://www.facebook.com/sharer.php?s=100&p%5Burl%5D=http%3A%2F%2Fgive.cat%2F&p%5Bimages%5D%5B0%5D=http%3A%2F%2Fgive.cat%2Fassets%2Fimg%2Fgc-facebook.jpg&p%5Btitle%5D=Give%20Cat!%20-%20Making%20the%20internet%20a%20squishier%20place!%20%23GiveCat" target="_blank" class="ir sharer sharer-fb pull-left"><?php echo gettext("Share on Facebook!"); ?></a>
              
							<a href="http://twitter.com/home?status=Make%20the%20internet%20a%20squishier%20place!%20http://give.cat/%20%40GiveCatApp%20%23givecat" target="_blank" class="ir sharer sharer-twitter pull-right"><?php echo gettext("Tweet about give<strong>cat</strong>!"); ?></a>
            </div>
          </div>
          
					<div class="gc-lead"><?php echo gettext("If you're a geek then you can fork us on GitHub... give<strong>cat</strong> is all open source!"); ?></div>
          
					<!-- GitHub Share Buttons -->
					<div class="row margin-top">
            <iframe src="http://ghbtns.com/github-btn.html?user=mattrayner&repo=Give.Cat&type=fork&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="80" height="30" class="margin-right"></iframe>
						
						<iframe src="http://ghbtns.com/github-btn.html?user=mattrayner&repo=Give.Cat&type=watch&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="77" height="30"></iframe>
						
						<iframe src="http://ghbtns.com/github-btn.html?user=mattrayner&repo=Give.Cat&type=follow&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="196" height="30" class="margin-left"></iframe>
          </div>
        </div>
      </div>
    </div>
    
		<!-- Footer Call To Action -->
		<div class="row blue-box margin-top margin-bottom">
			<div class="container">
				<h3 class="text-center light-blue-text margin-top margin-bottom"><?php echo gettext("Get the latest version:"); ?> <a class="btn btn-lg btn-default btn-white" href=<?php echo("'javascript: ".grabBookmarklet()."'"); ?>><?php echo gettext("Give Cat!"); ?></a><button class="info-button ir" href="#" data-toggle="modal" data-target="#myModal">i</button></h3>  
			</div>
    </div>
     
		<!-- Footer Page -->
		<div class="row page6">
      <div class="container">
				<!-- Copyright Notice -->
        <div class="col-sm-4 padme margin-top margin-bottom">
          <a href="http://give.cat/" class="gc-logo-inverse ir"><?php echo gettext("give<strong>cat</strong>"); ?></a>
          
					<p class="copy-notice padding-top"><?php echo gettext('Copyright &copy;2013 <a href="http://www.mattrayner.co.uk/" target="_blank">Matt Rayner</a>. Credit to <a href="http://heygirl.io">Hey Girl</a> for the inspiration.'); ?></p>
        </div>
        
				<!-- Catalan Transtaion Block -->
				<div class="col-sm-4 inverse padme margin-top margin-bottom">
          <?php if(!isset($_GET['locale'])){ ?>
					<h4>Català?</h4>
          <p>Si el català és la teua llengua, parla també en català a Internet. Més informació està disponible en <a href="http://www.navegaencatala.cat/perque.html">aquesta pàgina</a>.</p>
          <p class="text-right">
					  <a href="http://give.cat/?locale=ca">Navegar en català »</a>
					</p>
					<?php }else{ ?>
					<h4>English?</h4>
          <p>Do you speak english? You can view Give Cat in english too! While you're here, why not check out <a href="http://www.cats.org.uk" target="_blank">Cats Protection</a>... They're a worth while charity :).</p>
          <p class="text-right">
					  <a href="http://give.cat/">Browse in English »</a>
					</p>
					<?php } ?>
        </div>
        
			  <!-- Coded With Love Block -->
			  <div class="col-sm-4 padme margin-top margin-bottom">
          <?php echo gettext('<h4>Coded with love</h4>
          <p>Coded in my spare time with love, permission from my girlfrend and <a href="http://brackets.io" target="_blank">Brackets</a>.</p>
          <p>Created under the <a href="http://en.wikipedia.org/wiki/MIT_License" target="_blank">MIT license</a>. <a href="http://github.com/mattrayner/Give.Cat/" target="_blank">Fork me on GitHub</a>.</p>'); ?>
        </div>
      </div>
    </div>
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel"><?php echo gettext("What's this?"); ?></h4>
					</div>
					<div class="modal-body">
						<p class="lead"><?php echo(gettext("So, Give Cat is allways updating, changing and getting better... Infact, the latest public version of Give Cat was updated on <strong>").getJSModified()); ?></strong>.</p>
						<p class="lead"><?php echo gettext("All you need to do is drag the button below to your bookmark bar... Simples!"); ?></p>
						<div class="row margin-top margin-bottom purple-box">
              <div class="pull-center drag-action"></div>
            	<div class="row text-center margin-bottom">
              	<a href=<?php echo("'javascript: ".grabBookmarklet()."'"); ?> class="btn btn-default btn-white btn-lg"><?php echo gettext("Give Cat!"); ?></a>
            	</div>
						</div>
						<hr/>
						<h4><?php echo gettext("Changes:"); ?></h4>
						<p><?php echo gettext("Want to know exactly what's been updated? Check out the changes below!"); ?></p>
						<div class="well well-changelog">
							<?php echo grabChanges(); ?>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Awesome!</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.cycle.lite.js"></script>
    <script>
      var arrows;   
    	$(document).ready(function() {
				
				/**
				 * Arrows code - makes them all animate-y
				 **/
      	arrows = $('.animated-arrows span');
      	setInterval(animateArrows, 100);
        
      	$(".cycle-container").cycle();
        
      	$(".clicker").on("click", function(e){
        	$(this).toggleClass("clicked");
            
            $(window).scroll();
      	});

      	function animateArrows() {
          arrows.each(function( index ) {
            var opacity = parseFloat($(this).css("opacity"));
            var dataDir = $(this).data("fadein");
                
            if(dataDir == "true" || dataDir == true){
            	opacity += 0.1;
                  
              if(opacity >= 1){
                opacity = 1;
                dataDir = "false";
              }
            }else{
              opacity -= 0.1;
                  
              if(opacity <= 0.4){
                opacity = 0.4;
                dataDir = "true";
              }
            }
            
						$(this).css("opacity", opacity);
            $(this).data("fadein", dataDir);
          });
				}
				
				/**
				 * Dog reset button
				 **/
				var dogFolder = "assets/img/dogs/";
				
				$("#reset-dogs").on("click", function(e){
					e.preventDefault();
					
					$(".row.dogs img").each(function(i, v){
						$(this).attr("src", dogFolder+(i+1)+".png");
					});
				});
				
				/**
				 * Scroll handler on document body
				 **/
				var navbarheight,page1pos,page2pos,page3pos,page4pos,page5pos,page6pos;
				
				/**
				 * Listen for the window resizing
				 **/
				$( window ).resize(function() {
					updatePositions();
				});
				
				updatePositions();
				
				/**
				 * Listen for the page to scroll
				 **/
				$(window).scroll(function(){
					var bodypos = $("body").scrollTop();
					
					if(bodypos >= page2pos)
						$(".progress-dot-2").addClass("active");
					else
						$(".progress-dot-2").removeClass("active");
						
					if(bodypos >= page3pos)
						$(".progress-dot-3").addClass("active");
					else
						$(".progress-dot-3").removeClass("active");
						
					if(bodypos >= page4pos)
						$(".progress-dot-4").addClass("active");
					else
						$(".progress-dot-4").removeClass("active");
						
					if(bodypos >= page5pos)
						$(".progress-dot-5").addClass("active");
					else
						$(".progress-dot-5").removeClass("active");
				}); 
				
				/**
				 * Update all of our scroll position variables
				 **/
				function updatePositions(){
					navbarheight = $(".navbar").height() + 1;
				
					page1pos = 0;
					page2pos = $(".page2").position().top - navbarheight;
					page3pos = $(".page3").position().top - navbarheight;
					page4pos = $(".page4").position().top - navbarheight;
					page5pos = $(".page5").position().top - navbarheight;
					page6pos = $(".page6").position().top - navbarheight;
					
					$(window).scroll();
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
<?php
	/**
	 * Load the javascript bookmarklet
	 *
	 * @return  String  Bookmarklet string
	 **/
	function grabBookmarklet(){
		return file_get_contents('GiveCatJS/givecat.loader.min.js', FILE_USE_INCLUDE_PATH); ;
	}
	
	/**
	 * Look at when the js file was last updated...
	 *
	 * @return	String	Date the js file was last updated!
	 **/
	function getJSModified(){
		return date("F d Y H:i:s", filemtime('GiveCatJS/givecat.loader.min.js'));
	}

	/**
	 * Grab all of the change logs for previous version
	 *
	 * @return	String	DOM String of changes to the give cat app over the versions
	 **/
  function grabChanges(){
		return "<article>
						  <h5>Version 0.7:</h5>
							<ul>
								<li>Pretty new website</li>
								<li>Added a changelog!</li>
								<li>Fixed the update dialogue so that it's less annoying</li>
								<li>Reduced the overall size of Give Cat</li>
								<li>Updated base images to a larger number</li>
							</ul>
						</article>
						<article>
							<h5>Version 0.6:</h5>
							<ul>
								<li>Added basic version checking</li>
								<li>Fixed a bug that stopped pages working after Give Cat was fired</li>
								<li>General performance updated</li>
							</ul>
						</article>
						<article>
					    <h5>Version 0.1 - 0.5:</h5>
							<ul>
								<li>Loads of improvement and feature updates!</li>
							</ul>
						</article>";
	}
?>