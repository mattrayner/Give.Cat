<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>Update Available - Give Cat!</title>
  
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
  <div class="container">
    <h1 class="gc-logo-lg pull-center ir">give<strong>cat</strong></h1>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 gc-lead text-center">
        Thanks for using <span class="blue-text">give</span><strong>cat</strong>! There's a new version available with loads of added extras!
        <span class="callout">Update by dragging the button below just like before</span>
      </div>
      <div class="col-md-8 col-md-offset-2 text-center margin-top margin-bottom">
        <a href=<?php echo("'javascript: ".grabBookmarklet()."'"); ?> class="btn btn-default btn-white btn-lg">Give Cat!</a>
      </div>
  </div>
  
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
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