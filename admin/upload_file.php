<?php
if ($_FILES["file"]["error"] > 0){
  header("location: home.php?e=0&message=".$_FILES["file"]["error"]);  
}else{
  list($width, $height) = getimagesize($_FILES["file"]["tmp_name"]);
  
  $proportion=$height/$width;
	
  if($proportion>1)$orientation = "ver";
  else if($proportion===1)$orientation = "squ";
  else if($proportion<1)$orientation = "hor";
  
  include_once("../lib/php/helperFunctions.php");

  $databaseconnect = connectToDB();

  if($result = $databaseconnect->query("INSERT INTO `cats` VALUES (NULL, '".$orientation."')")) {
    $newID = $databaseconnect->insert_id;
	
	$uploads_dir = "../api/img";
    $tmp_name = $_FILES["file"]["tmp_name"];
    move_uploaded_file($tmp_name, $uploads_dir."/".$newID.".jpg");

	//If either are not set then the 
    if(file_exists($uploads_dir."/".$newID.".jpg"))
      header("location: home.php?s=1");
    else
      header("location: home.php?e=2");
  }else{header("location: home.php?e=1");}
}
?>