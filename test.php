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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo gettext("Give Cats! Make your internet warm and fuzzy!"); ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/givecat.css" rel="stylesheet">

    <style>
    .page{min-height: 700px;}
    </style>

	<!-- Facebook Image -->
	<meta property="og:image" content="http://give.cat/assets/img/CatBackground.jpg"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top gc-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <section class="page page-welcome blue-cat">
      <div class="container">
        <header>
          <h1>Meow!</h1>
          <p class="lead">News websites getting you down? Cant face another look at 9gag? Or are you just fed up of looking at your friend's ugly faces?.</p>
        </header>
        <p class="scroll-down">Scroll Down</p>
        <footer>You've come to the right place...</footer>
      </div>
    </section>

    <section class="page page-example">
      <div class="container">
        <header>
          <h2>So what does it do?</h2>
          <p class="lead">Basically, we get all of the images on a website... And replace them with cats!</p>
          <p>Need I say more?</p>
        </header>
        <footer>
          <div class="site-cycle pull-center">
            <div class="whatsite">
              <img src="" alt="BBC News"/>
              <p>BBC News</p>
            </div>
            <img src="asets/img/home/bbc.jpg"/>
            <img src="asets/img/home/bbc-squish.jpg"/>
            <div class="whatsite">
              <img src="asets/img/home/logos/9gag.jpg" alt="9GAG"/>
              <p>9GAG</p>
            </div>
            <img src="asets/img/home/9gag.jpg"/>
            <img src="asets/img/home/9gag-squish.jpg"/>
            <div class="whatsite">
              <img src="asets/img/home/logos/facebook.jpg" alt="Facebook"/>
              <p>Facebook</p>
            </div>
            <img src="asets/img/home/facebook.jpg"/>
            <img src="asets/img/home/facebook-squish.jpg"/>
          </div>
        </footer>
      </div>
    </section>

    <section class="page page-tutorial-start">
      <div class="container">
        <header>
          <h2>How can I have this in my life?</h2>
          <p class="lead">I thought you'd never ask!</p>
          <p>It's pretty simple... Just follow the steps below!</p>
        </header>
        <footer>
          <a class="btn btn-hg btn-primary" id="bookmarkletMover" href="#bookmarklet"></a>
        </footer>
      </div>
    </section>

    <a id="bookmarklet" class="hidden"></a>
    <!-- Desktop bookmarklet -->
    <section class="page page-tutorial-bookmarklet hidden-xs hidden-sm">
      <div class="container">
        <header>
          <h2>Drag the magic!</h2>
          <p class="lead">Grab a hold of the button below and drag it up to your bookmark bar.</p>
        </header>
        <section>
          <!--<video></video>-->
          <a class="btn btn-hg btn-primary clearfix" href=<?php echo("'javascript: ".grabBookmarklet()."'"); ?>>Give Cat!</a>
        </section>
        <footer>
          <p class="scroll-down">Scroll Down</p>
        </footer>
      </div>
    </section>
    <!-- iOS bookmarklet -->

    <!-- Android bookmarklet -->

    <!-- Black Berry bookmarklet -->

    <!-- Windows Phone bookmarklet -->


    <section class="page page-cats">
      <div class="container">
        <header>
          <h2>Meet the cats</h2>
        </header>
      </div>
    </section>

    <footer>
      <div class="container">
        
      </div>
    </footer>

    <!--
    <div class="container">
      <!-- Main component for a primary marketing message or call to action --
      <div class="col-sm-12 col-md-10">
        <h1>Meow!</h1>
        <p class="lead">News websites getting you down? Cant face another look at 9gag? Or are you just fed up of looking at your friend's ugly faces?.</p>
      </div>
      <hr>
      <div class="container">
        <div class="col-md-4 well">
          <div class="instruction instruction-1"></div>
          <hr>
          <div class="instruction-text">
            <p>Drag me up to your bookmark bar</p><span class="instruction-text-arrow"></span>
            <a class="btn btn-lg btn-primary clearfix" href=<?php echo("'javascript: ".grabBookmarklet()."'"); ?>>Give Cat!</a>
          </div>
          <p class="instruction-number instruction-number-1">1</p>
        </div>

        <div class="col-md-4 well">
          <div class="instruction instruction-2"></div>
          <hr>
          <div class="instruction-text">
            <p>Visit any website or the</p>
            <a class="btn btn-default clearfix" href="dogs.html">Test Page</a>
          </div>
          <p class="instruction-number instruction-number-2">2</p>
        </div>

        <div class="col-md-4 well">
          <div class="instruction instruction-3"></div>
          <hr>
          <div class="instruction-text">
            <p>Click the <a href="#" id="instruction-3-trigger" class="ir">Give Cat!</a> button and Hey-Presto!</p>
          </div>
          <p class="instruction-number instruction-number-3">3</p>
        </div>
      </div>
      <hr>
      <div class="container example-sites">
        <h2>Show me!</h2>
        <p>Want to know what you're in for? Here's some example sites being made squishier:</p>
        <div class="row window">
          <div class="site-cycle">
            <div class="whatsite">
              <img src="" alt="BBC News"/>
              <p>BBC News</p>
            </div>
            <img src="asets/img/home/bbc.jpg"/>
            <img src="asets/img/home/bbc-squish.jpg"/>
            <div class="whatsite">
              <img src="asets/img/home/logos/9gag.jpg" alt="9GAG"/>
              <p>9GAG</p>
            </div>
            <img src="asets/img/home/9gag.jpg"/>
            <img src="asets/img/home/9gag-squish.jpg"/>
            <div class="whatsite">
              <img src="asets/img/home/logos/facebook.jpg" alt="Facebook"/>
              <p>Facebook</p>
            </div>
            <img src="asets/img/home/facebook.jpg"/>
            <img src="asets/img/home/facebook-squish.jpg"/>
          </div>
          </div>
        </div>
        <div class="container">
          <div class="col-md-6 well">
            <h3>What's been happening?</h3>
            <p>What's been changing with Give Cat? You can see below:</p>
            <div class="git-commits">
              Loading last updates...
            </div>
          </div>
          <div class="col-md-6 well">
            <h3>What've people been saying?</h3>
            <div class="give-cat-tweets">
              Loading #GiveCat Tweets... 
            </div>
          </div>
          <div class="row">
            
          </div>
        </div>
  </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
    <script>
      $(function(){
        window.onresize = function(event) {
          setPageHeight();
        }

        setPageHeight();
      })

      function setPageHeight(){
        var windowHeight = $(window).height(),
            navbarHeight = parseInt($(".navbar").height()),
            navbarMargin = parseInt($(".navbar").css("margin-bottom"))
            pageHeight1 = windowHeight - (navbarHeight + navbarMargin);
            pageHeight = windowHeight - navbarHeight;

        $("head style").text(".page { min-height: "+pageHeight+"px; } .page:nth-child(1) { min-height: "+pageHeight1+"px; }");
      }
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
 *
 **/
function grabBookmarklet(){
  return file_get_contents('GiveCatJS/givecat.loader.min.js', FILE_USE_INCLUDE_PATH); ;
}
?>