<?php
session_start();

if($_SESSION['loggedin']){
	header("location: home.php");	
}

include_once("assets/php/helperFunctions.php");

$databaseconnect = connectToDB("config.inc.php");

?>