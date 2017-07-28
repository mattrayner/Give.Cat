<?php
session_start();

//header('Content-Type: image/jpeg'); 
if(!isset($_GET['id']) || !isset($_SESSION['loggedin']) || !file_exists ( "".$_GET['id'].".jpg" )){header("location: fail.jpg");}

include_once("../../lib/php/SimpleImage.php");

$string = "".$_GET['id'].".jpg";

//echo("<img src='".$string."'/>");

$image = new SimpleImage();
$image->load($string);

$orientation = null;

$proportion = $image->getHeight()/$image->getWidth();
	
if($proportion>1)$orientation="portrait";
else if($proportion===1)$orientation="square";
else if($proportion<1)$orientation="landscape";

if($orientation == "portrait"){
	$image->resizeToHeight(150);
}else{
	$image->resizeToWidth(150);
}

$image->output();
?>