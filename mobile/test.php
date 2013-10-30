<?php 
error_reporting(E_ALL); 

require_once("../lib/Mobile_Detect.php");


?>
<!DOCTYPE html>
<html class="intro">
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="mobiletest.css">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container gc-container">
    	<!-- Header bit -->
    	<header class="navbar navbar-fixed-top gc-nav" role="banner">
		  <div class="container">
		    <div class="navbar-header">
		      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a href="http://give.cat/" class="navbar-brand ir gc-ball-logo">Give.Cat</a>
		      <p class="navbar-text visible-xs">Give Cat</p>
		    </div>
		    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
		      <ul class="nav navbar-nav">
		        <li>
		          <a href="./getting-started">Give me cats!</a>
		        </li>
		        <li>
		          <a href="http://github.com/mattrayner/Give.Cat">Fork me on GitHub</a>
		        </li>
		      </ul>
		    </nav>
		  </div>
		</header>
    	<!-- End of header bit -->
    	<!-- Content -->
    	<div role="main" class="container">
	      <div class="row" id="intro">
		      <h1>Meow!</h1>
		      <p class="lead">Welcome to Give Cat - we'll help you make the internet a fuzzier place on your phone!</p>
		      <p>It's gonna be about 4 steps but wont take long!</p>
		      <hr>
		      <a class="btn btn-primary btn-lg gc-button-center" href="#" id="getStartedButton">Get Started!</a>
		      <a class="btn btn-primary btn-lg gc-button-center" href="#" id="appendButton">Append!</a>
		      <a class="btn btn-primary btn-lg gc-button-center" href="#" id="getStartedButton">Test Button</a>
		      <a class="btn btn-primary btn-lg gc-button-center" href="#" id="getStartedButton">Share!</a>
	      </div>
    	</div>
    	<!-- End content
    	<!-- Footer -->
    	<!-- End of footer -->
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
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
	    
	    var javascriptString = <?php
						$file = file_get_contents('../JS/awwcat.database.production.min.js', FILE_USE_INCLUDE_PATH); 
						echo "'".$file."'";
						?>;
	    
	    var appended = false;
	    
			$("#appendButton").click(function(event) {
				event.preventDefault();
				if(!appended){
					window.location.href = window.location.href + "?" + javascriptString;
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