<?php
/**
 * GiveCat API - Will load an updated array of cat images - meaning you always
 * get fresh cats! :)
 *
 * Default behaviour on visit = error json
 **/

/*************************************
 Add simple caching of results - stops
 server load and also lowers API calls
 during high load
 *************************************/

$cachefile = "cache/cats.json";
$cachetime = 5 * 60; // 5 minutes
//$cachetime = 1;

// Serve from the cache if it is younger than $cachetime
if (file_exists($cachefile) && (time() - $cachetime < filemtime($cachefile))) {
	outputCatsJSON(NULL);
	exit;
}

ob_start(); // start the output buffer
?>
<?php
//Include our helper functions (drives our stuff)
include_once("../lib/php/helperFunctions.php");

//Make a connection to the DB
$mysql_connection = connectToDB();

//Make a query to the database getting every 'cat'
$result = mysqli_query($mysql_connection,"SELECT * FROM  `cats`");

//Close the database connection
mysqli_close($mysql_connection);

//Create a cat array - we'll convert it into JSON later
$cats;

//Iterate over every row in the database
while($row = mysqli_fetch_array($result)){
	$cats[$row['id']] = $row['orientation']; //Add an array entry
}

//Check that we have some cats - stop running if we have none
if(count($cats) <= 0) die(outputJSON('{"error" : "No cats found in the database"}'));

//Start the JSON string
$json = '{ "generated": "'.date("c").'", "cats" : {';

//Get all of the IDs for our cats (allows for deletions etc.)
$keys = array_keys($cats);

//Iterate over each of our cats and create the JSON for it
for($i = 0; $i < count($keys); $i++){
	$key = $keys[$i];       //Pull out the current key (Cat ID)

	$json .= $key.' : "'.$cats[$key].'"';  //Append the json string to what we have '0 : "hor",'

	if($i < (count($keys)-1)) $json .= ", ";  //Make sure we are not on the last cat and append a ','
}

//Close off our JSON string
$json .= "}}";

//Echo out what we have
outputCatsJSON($json, true);

// open the cache file for writing
$fp = fopen($cachefile, 'w');

// save the contents of output buffer to the file
fwrite($fp, ob_get_contents());

// close the file
fclose($fp);

// Wipe the output buffer
ob_clean();

outputCatsJSON($json, false);

/**
 * Output our cats JSON to the browser!
 **/
function outputCatsJSON($json, $justJSON){
	//JSON if no callback is set
	if( !isset($_GET['callback']) || $justJSON) {
    header('Content-type: application/json');
		//Make sure the JSON is set or output the cache file
		if(isset($json) && $json != NULL){echo($json);}else{include("cache/cats.json");}
	}else{
    header('Content-type: application/javascript');
		//Echo out our JSONP
		echo("{$_GET['callback']}(");

		//Make sure the JSON is set or output the cache file
		if(isset($json) && $json != NULL){echo($json);}else{include("cache/cats.json");}

		//Echo the last bit of the JSONP string
		echo(")");
	}
}
?>