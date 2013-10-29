<!DOCTYPE html>
<html>
  <head>
    <title>Give Cats! Make your internet warm and fuzzy!</title>
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
  			<h4>Wait a minute...</h4>
  			You're on a desktop aren't you? You can stay but we have another bit for you <a href='/'>here</a>.
  		</div>
  		<div class="navbar navbar-fixed-top">
	      <div class="container">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".nav-collapse">
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="#">World</a>
	        <div class="nav-collapse in" style="height: auto;">
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
	                <li class="dropdown-header">Header</li>
	                <li><a href="#">Separated link</a></li>
	                <li><a href="#">One more separated link</a></li>
	              </ul>
	            </li>
	          </ul>
	          <ul class="nav navbar-nav pull-right">
	            <li><a href="#">Link</a></li>
	            <li><a href="#">Login</a></li>
	            <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
    	<div role="content" class="row-fluid">
    		<div id="step1" class="row-fluid">
    			
    		</div>
    	</div>
    	<div id="push"></div>
  	</div>
  	<footer id="footer">Copyright &copy;2013 <a href="http://give.cat/">Give.Cat</a>. Created by <a href="http://www.twitter.com/mattrayner" target="_blank>">Matt Rayner</a>, inspired by the genius of <a href="http://heygirl.io/" target="_blank">Hey Girl</a>. <a href="http://give.cat/">Parla catal&#133;?</a> - Fork me on <a href="https://github.com/mattrayner/Give.Cat" target="_blank">GitHub</a>.</footer>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script>
	    $(document).load(function(){
	    	var javascriptString = "<?php 
	    				$file = file_get_contents('../JS/awwcat.database.production.min.js', FILE_USE_INCLUDE_PATH); 
						echo $file;
						?>";
	    
			
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
