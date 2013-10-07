<?php
/**
 * Load in our config file and use the information to connect to the givecat database.
 * If there is an error then output it as a json error string.
 *
 * @param	String	Path to config file.
 * @return	MySQLi	The MySQLi object returned when we ran mysqli_connect
 **/
function connectToDB($configfile){
	include_once($configfile);
	
	//Connect to the database using the information from our config file.
	$mysql_connection = mysqli_connect("localhost",$catdatabaseuser,$catdatabasepass,$catdatabasename);
	
	// Check connection
	if (mysqli_connect_errno($mysql_connection)){
		//Build our error string
		$json = '{error: "Failed to connect to MySQL: '.mysqli_connect_error().'"}';
		
		//Stop us going any further and output the JSON
		die(outputJSON($json));
	}
	
	return $mysql_connection;
}

/**
 * If JSONP is being used make sure that the callback is a valid JSONP callback
 **/
function is_valid_callback($subject)
{
    $identifier_syntax
      = '/^[$_\p{L}][$_\p{L}\p{Mn}\p{Mc}\p{Nd}\p{Pc}\x{200C}\x{200D}]*+$/u';

    $reserved_words = array('break', 'do', 'instanceof', 'typeof', 'case',
      'else', 'new', 'var', 'catch', 'finally', 'return', 'void', 'continue', 
      'for', 'switch', 'while', 'debugger', 'function', 'this', 'with', 
      'default', 'if', 'throw', 'delete', 'in', 'try', 'class', 'enum', 
      'extends', 'super', 'const', 'export', 'import', 'implements', 'let', 
      'private', 'public', 'yield', 'interface', 'package', 'protected', 
      'static', 'null', 'true', 'false');

    return preg_match($identifier_syntax, $subject)
        && ! in_array(mb_strtolower($subject, 'UTF-8'), $reserved_words);
}

/**
 * Output the json we have to the browser!
 * - Check if there is a callback (JSONP)
 *   - Output appropriate json
 *
 * @param	JSON	A json string to be outputted including the {}
 * @return	VOID	Echo's the json/jsonp out to the browser
 **/
function outputJSON($json){
	if(isset($_GET['callback'])){
		if(is_valid_callback($_GET['callback'])){
			return "{$_GET['callback']}(".$json.")";
		} else {
			header('status: 400 Bad Request', true, 400);
		}
	}else{return $json;}
}
?>