<?php
session_start();

if(!$_SESSION['loggedin']){
	header("location: index.php");	
}

include_once("../lib/php/helperFunctions.php");

$databaseconnect = connectToDB();

$result = $databaseconnect->query("SELECT * FROM `cats` ORDER BY  `cats`.`id` DESC");

$num_rows = $result->num_rows;

$cats = array();

if($num_rows <= 0){
}else{
	while($row = $result->fetch_assoc()){
		array_push($cats, new Cat($row['id'], $row['orientation']));
	}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Give Cat admin panel</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/navbar.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

<body>

	<div class="container">
	
		<!-- Static navbar -->
		<div class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://give.cat/admin/">Give Cat</a>
			</div>
			
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Actions <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="home.php">Cat manager</a></li>
							<li><a href="bookmarklet.php">Bookmarklet settings</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">About Give.Cat</li>
							<li><a href="http://give.cat/about">About</a></li>
							<li><a href="https://github.com/mattrayner/Give.Cat">Github</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi, matt@mattrayner.co.uk <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="profile.php">Edit profile</a></li>
							<li class="divider"></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
		
		<!-- Main component for a primary marketing message or call to action -->
		<?php 
		if(isset($_GET['e'])){
			switch($content){
				case 0: $content = "<b>Error uploading file:</b> Please make sure the combined file size <= 50MB & you are not uploading > 20 files at once.";
						break;
				case 1: $content = "<b>Error INSERTING</b> - didn't work.";
				        break;
				case 2: $content = "<b>Error moving file</b> - uploaded image was not moved successfully :S.";
						break;
			};
			
			echo('<div class="alert alert-danger">'.$content.'</div>');
		}
		
		if(isset($_GET['s']) && $_GET['s'] == 1){
			$content = "<b>Yaaay!</b> - Image(s) successfully uploaded.";
			
			echo('<div class="alert alert-success">'.$content.'</div>');
		} ?>
		<div class="jumbotron container">
			<div class="col-md-6">
				<h1>Manage cats!</h1>
				<p>Upload new cat images here or delete current ones below</p>
			</div>
			<div class="col-md-6">
				<div class="well"><!-- Image upload form -->
					<form action="upload_file.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="file">Cat file</label>
							<p class="help-block">Upload your cat images!<br />(MAX TOTAL SIZE: 50MB)</p>
							<input type="file" name="files[]" id="file" multiple>
						</div>
						<button type="submit" class="btn btn-default">Upload</button>
						
						<div id="catUploadBar" class="hidden progress progress-striped active">
							<div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
								<span class="sr-only">Uploading...</span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<hr/>
		
		<!-- List of all current images (with remove link -->
		
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Cats</div>
			<div class="panel-body">
				<p>Below are all of the cats currently in the database. You can peruse or delete them at your leisure! Remember that hitting the delete button is <b>PERMANENT</b> and can not be undone.</p>
			</div>
		
			<!-- Table -->
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Thumbnail</th>
						<th>Orientation</th>
						<th>URL</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php
					 /**
					  * Echo out table rows in the format:
					  * <tr>
					  *	 <td>1</td>
					  *	 <td><img src="http://give.cat/api/img/thumb.php?id=1"/></td>
					  *  <td>hor</td>
					  *  <td>http://give.cat/api/img/1.jpg</td>
					  *  <td><a href="http://give.cat/admin/delete.php">Delete</a></td>
					  * </tr>
					  *
					  * Hopefully it should work!
					  **/
					  if($num_rows > 0){
						  for($i=0; $i<sizeof($cats); $i++){							
							$cat = $cats[$i];
							
							echo('<tr><td>'.$cat->id.'</td><td><img src="http://give.cat/api/img/thumb.php?id='.$cat->id.'"/></td><td>'.$cat->orientation.'</td><td><a href="'.$cat->url.'" target="_blank">'.$cat->url.'</a></td><td><a href="delete.php?id='.$cat->id.'">delete</a></td></tr>');
						  }
					  }else{
						  echo('No cats... There should be :S');
					  }
					?>
				</tbody>
			</table>
		</div>
	</div> <!-- /container -->


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
</body>
</html>