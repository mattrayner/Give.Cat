<?php
$biggestSide = 374; //The largest side of the image should be how large?
  
function reArrayFiles(&$file_post) {

  $file_ary = array();
  $file_count = count($file_post['name']);
  $file_keys = array_keys($file_post);

  for ($i=0; $i<$file_count; $i++) {
    foreach ($file_keys as $key) {
      $file_ary[$i][$key] = $file_post[$key][$i];
    }
  }

  return $file_ary;
}
	
if ($_FILES['files']) {
  $file_ary = reArrayFiles($_FILES['files']);
  
  //Require our database and image manipulation libraries
  require_once("../lib/php/helperFunctions.php");
  require_once("../lib/php/SimpleImage.php");

  $databaseconnect = connectToDB();
	
  foreach ($file_ary as $file) {  
	list($width, $height) = getimagesize($file["tmp_name"]);
  
    $proportion=$height/$width;
	
	if($proportion>1)$orientation = "ver";
    else if($proportion===1)$orientation = "squ";
    else if($proportion<1)$orientation = "hor";

    if($result = $databaseconnect->query("INSERT INTO `cats` VALUES (NULL, '".$orientation."')")) {
      $newID = $databaseconnect->insert_id;
	
	  $uploads_dir = "../api/img";
      $tmp_name = $file ["tmp_name"];
      move_uploaded_file($tmp_name, $uploads_dir."/".$newID.".jpg");

	  // Load the original image
	  $image = new SimpleImage($uploads_dir."/".$newID.".jpg");
 
	  // Resize the image to our specified size - depending on it's orientation
	  if($orientation == "ver"){
	    $image->resizeToHeight($biggestSide);
	  }else if($orientation == "hor"){
	    $image->resizeToWidth($biggestSide);
	  }else{
	    $image->resize($biggestSide,$biggestSide);
	  }
	
	  $image->save($uploads_dir."/".$newID.".jpg");
    }
  }

  
  //cehck if the last file exists 
  if(file_exists($uploads_dir."/".$newID.".jpg"))
    header("location: home.php?s=1");
  else
    header("location: home.php?e=2");
}else{header("location: home.php?e=1");}
?>