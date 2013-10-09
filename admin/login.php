<?php
session_start();

if($_SESSION['loggedin']){
	header("location: home.php");	
}

include_once("helperFunctions.php");

$databaseconnect = connectToDB("config.inc.php");

//Username and pw sent from login form
$un = $_POST['un'];
$pw = $_POST['pw'];

$sql = "SELECT  `id`, `username` ,  `hash` FROM  `users` WHERE  `username` =  '{$un}'";

//Qery the server
$result = $databaseconnect->query($sql);

//Count table row
$count = $result->num_rows;

//the match must mean that the correct un is on row one
if($count>0){
	$row = $result->fetch_assoc();
	$hash = $row['hash'];

	include_once("pbkdf2.php");
							
	if( validate_password($pw, $hash) ){
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $row['username'];
		$_SESSION['userID'] = $row['id'];
		$location = "home.php";
	} else {
		$location = "index.php?e=0";
	}
} else {
	$location = "index.php?e=1";			
}

//header("location: ".$location);
?>