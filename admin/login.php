<?php
error_reporting(E_ALL);

session_start();

if($_SESSION['loggedin']){
	header("location: home.php");	
}

require("../lib/php/helperFunctions.php");

$databaseconnect = connectToDB();

//Username and pw sent from login form
$un = $_POST['un'];
$pw = $_POST['pw'];

if ($stmt = $databaseconnect->prepare("SELECT  `id`,`username`,`hash` FROM  `users` WHERE  `username`=?")) {

    /* bind parameters for markers */
    $stmt->bind_param("s", $un);

    /* execute query */
    $stmt->execute();
    
    /* bind result variables */
	$stmt->bind_result($id, $username, $hash);
	
    /* fetch value */
    $stmt->fetch();
    
    include_once("../lib/php/pbkdf2.php");
						
	if( validate_password($pw, $hash) ){
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $username;
		$_SESSION['userID'] = $id;
		$location = "home.php";
	} else {
		$location = "index.php?e=0";
	}
	
    /* close statement */
    $stmt->close();
}else{
	$location = "index.php?e=2";
}

header("location: ".$location);
?>