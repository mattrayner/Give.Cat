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

if ($stmt = $databaseconnect->prepare("SELECT  `id`,`username`,`hash` FROM  `users` WHERE  `username`=?")) {

    /* bind parameters for markers */
    $stmt->bind_param("s", $un);

    /* execute query */
    $stmt->execute();
    
    /* bind result variables */
	$stmt->bind_result($id, $username, $hash);

/*  //Count table row
	$count = $stmt->num_rows;
	
	//the match must mean that the correct un is on row one
	if($count>0){
	    /* fetch value */
	    $stmt->fetch();
	    
	    include_once("pbkdf2.php");
							
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
    /*}else{
	    $location = "index.php?e=1";
    }*/
}else{
	$location = "index.php?e=2";
}

header("location: ".$location);
?>