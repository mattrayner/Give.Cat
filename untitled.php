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
    <meta name="description" content="">
    <meta name="author" content="">

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
	<meta property="og:image" content="http://give.cat/assets/img/gc-facebook.jpg"/>

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
          <span class="progress-dot active">•</span>
          <span class="progress-dot">•</span>
          <span class="progress-dot">•</span>
          <span class="progress-dot">•</span>
          <span class="progress-dot">•</span>
        </p>
      </div>
    </div>

      <div class="row page1">
          <div class="container">
            <div class="row">
              <h1 class="gc-logo-lg pull-center ir"><?php echo gettext("give<strong>cat</strong>"); ?></h1>
            </div>
            <div class="row">
              <div class="col-md-8 col-md-offset-2 gc-lead text-center">
                <?php echo gettext("News websites getting you down? Can’t face another look at 9gag?<br/>Or are you just fed up of looking at your friend’s ugly faces?"); ?>
                <span class="callout"><?php echo gettext("You’ve come to the right place..."); ?></span>
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
      <div class="row page2">
          <div class="container">
            <div class="row blue-padder">
              <div class="col-md-7 pull-right">
                <h2 class="text-center blue-text">What's give<strong>cat</strong>?</h2>
                <div class="row">
                  <div class="row cycle-container pull-center">
                    <div class="cycle1 ir">BBC</div>
                    <div class="cycle2 ir">BBC - Cats</div>
                    <div class="cycle3 ir">Facebook</div>
                    <div class="cycle4 ir">Facebook - Cats</div>
                    <div class="cycle5 ir">9gag</div>
                    <div class="cycle6 ir">9gag - Cats</div>
                  </div>
                  <p class="gc-lead text-center margin-top"><?php echo gettext('This is what we do... Take <strong class="blue-text">all</strong> the pictures on a website and make them <strong class="blue-text">cats</strong>!'); ?></p>
                </div>
                <div class="row">
                  <div class="col-md-2 col-md-offset-5 gc-scroller margin-top pull-center text-center">
                    <?php echo gettext('Keep Going...'); ?>
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
              <!--<h3 class="text-center blue-text margin-bottom">There are new cats added all the time!</h3>-->    
            </div>
          </div>
      </div>
      <div class="row page3">
        <div class="container">
          <div class="col-md-6">
            <h2 class="white-text text-center text-shadow"><?php echo gettext("I can<strong>has</strong>?"); ?></h2>
            <div class="gc-lead white-text text-center text-shadow"><?php echo gettext('Yes, you can has... All you have to do is <strong class="purple-text">drag the button below</strong> to your <strong class="purple-text">bookmark bar</strong> like this:'); ?></div>
            <div class="row margin-top margin-bottom">
              <div class="pull-center drag-action"></div>
            <div class="row text-center">
              <a href=<?php echo("'javascript: ".grabBookmarklet()."'"); ?> class="btn btn-default btn-white btn-lg"><?php echo gettext("Give Cat!"); ?></a>
            </div>
            </div>
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
      <div class="row page4">
        <div class="container margin-top">
          <h2 class="gc-logo-lg pull-center ir"><?php echo gettext("give<strong>cat</strong>"); ?></h2>
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
          <div class="row">
            <h3 class="text-center blue-text margin-bottom"><?php echo gettext("Fancy another go?"); ?> <a class="btn btn-lg btn-default btn-white" href="#" id="reset-dogs"><?php echo gettext("Reset Dogs!"); ?></a></h3>  
          </div>
        </div>
      </div>
      <div class="row page5 text-shadow text-center white-text">
        <div class="container">
          <div class="col-md-6">
            <h2><?php echo gettext("Share the<strong>awesome</strong>!"); ?></h2>
            <div class="gc-lead"><?php echo gettext("Pretty epic right? Why not tell your friends and share the love?"); ?></div>
            <div class="row margin-top margin-bottom">
              <div class="sharer-container pull-center">
                <a href="https://www.facebook.com/sharer.php?s=100&p%5Burl%5D=http%3A%2F%2Fgive.cat%2F&p%5Bimages%5D%5B0%5D=http%3A%2F%2Fgive.cat%2Fassets%2Fimg%2Fgc-facebook.jpg&p%5Btitle%5D=Give%20Cat!%20-%20Making%20the%20internet%20a%20squishier%20place!" target="_blank" class="ir sharer sharer-fb pull-left"><?php echo gettext("Share on Facebook!"); ?></a>
                <a href="http://twitter.com/home?status=Make%20the%20internet%20a%20squishier%20place!%20http://give.cat/%20#givecat" target="_blank" class="ir sharer sharer-twitter pull-right"><?php echo gettext("Tweet about give<strong>cat</strong>!"); ?></a>
              </div>
            </div>
            <div class="gc-lead"><?php echo gettext("If you’re a geek then you can fork us on GitHub... give<strong>cat</strong> is all open source!"); ?></div>
            <div class="row margin-top">
              <iframe src="http://ghbtns.com/github-btn.html?user=mattrayner&repo=Give.Cat&type=fork&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="80" height="30" class="margin-right"></iframe><iframe src="http://ghbtns.com/github-btn.html?user=mattrayner&repo=Give.Cat&type=watch&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="77" height="30"></iframe><iframe src="http://ghbtns.com/github-btn.html?user=mattrayner&repo=Give.Cat&type=follow&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="196" height="30" class="margin-left"></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="row page6">
        <div clas="container">
          <div class="col-sm-4 padme margin-top margin-bottom">
            <a href="#" class="gc-logo-inverse pull-center ir"><?php echo gettext("give<strong>cat</strong>"); ?></a>
            <p class="text-center copy-notice"><?php echo gettext('Copyright &copy;2013 <a href="http://www.mattrayner.co.uk/" target="_blank">Matt Rayner</a>. Credit to <a href="http://heygirl.io">Hey Girl</a> for the original cancept.'); ?></p>
          </div>
          <div class="col-sm-4 inverse padme margin-top margin-bottom">
            <?php echo gettext('<h4>Català?</h4>
            <p>Si el català és la teua llengua, parla també en català a Internet. Més informació està disponible en <a href="http://www.navegaencatala.cat/perque.html">aquesta pàgina</a>.</p>
            <p class="text-right"><a href="#">Navegar en català »</a></p>'); ?>
          </div>
          <div class="col-sm-4 padme margin-top margin-bottom">
            <?php echo gettext('<h4>Coded with love</h4>
            <p>Coded in my spare time with love, permission from my girlfrend and <a href="http://brackets.io" target="_blank">Brackets</a>.</p>
            <p>Created under the <a href="http://en.wikipedia.org/wiki/MIT_License" target="_blank">MIT license</a>. <a href="http://github.com/mattrayner/Give.Cat/" target="_blank">Fork me on GitHub</a>.</p>'); ?>
          </div>
        </div>
      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.cycle.lite.js"></script>
    <script>
    var baloon;   
    $(document).ready(function() {
      baloon = $('.animated-arrows span');
      setInterval(animateArrows, 100);
        
      $(".cycle-container").cycle();
        
      $(".clicker").on("click", function(e){
         $(this).toggleClass("clicked"); 
      });

      function animateArrows() {
          baloon.each(function( index ) {
              var opacity = parseFloat($(this).css("opacity"));
              var dataDir = $(this).data("fadein");
              
              //console.log(dataDir);
              
              if(dataDir == "true" || dataDir == true){
                  //console.log("up");
                  
                  opacity += 0.1;
                  
                  if(opacity >= 1){
                      opacity = 1;
                      dataDir = "false";
                  }
              }else{
                  opacity -= 0.1;
                  
                  if(opacity <= 0.4){
                      //console.log("triggered");
                      opacity = 0.4;
                      dataDir = "true";
                  }
              }
              
              //console.log(opacity + " -- " + dataDir);
              
              $(this).css("opacity", opacity);
              $(this).data("fadein", dataDir);
          });
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
?>