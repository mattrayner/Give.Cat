<?php
/**
 * Load in our config file and use the information to connect to the givecat database.
 * If there is an error then output it as a json error string.
 *
 * @param	String	Path to config file.
 * @return	MySQLi	The MySQLi object returned when we ran mysqli_connect
 **/
function connectToDB(){
	include_once("config.inc.php");
	
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
 * A php CAT class
 * - Use when maipulating CATs
 * 
 * @author Matt Rayner
 */
class Cat {
    /**
     * Some cat properties
     * 
     * @var int, string, string
     * @access private
     */
    public $id,$orientation,$url;
    
    /**
     * Set some values for Cat::properties
     * 
     * @param int Cat ID
     * @param string orientation
     */
    public function __construct ($id,$orientation) {
        $this->id = $id;
        $this->orientation = $orientation;
        $this->url = "http://give.cat/api/img/".$id.".jpg";
    }
    
    /**
     * Print out a div table for this cat
     * 
     * @access public
     */
    public function printRow() {
        return '<div class="clearfix"><div class="span1">'.$this->getID().'</div><div class="span3">'.$this->getOrientation().'</div><div class="span5"><a href="'.$this->getURL().'" target="_blank">'.$this->getURL().'</a></div><div class="span3">'.$this->getThumb().'</div></div>';
    }
    
    /**
     * getID function.
     * 
     * @access public
     * @return int
     */
    public function getID() {
	    return $this->$id;
    }
    
    /**
     * getOrientation function.
     * 
     * @access public
     * @return string
     */
    public function getOrientation() {
	    return $this->orientation;
    }
    
    /**
     * getURL function.
     * 
     * @access public
     * @return string
     */
    public function getURL() {
	    return $this->url;
    }
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