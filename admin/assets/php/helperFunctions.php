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
    private $id,$orientation,$url;
    
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
    public function printOut() {
        echo '<div class="clearfix"><div class="span1">'.$this->getID()
        	.'</div><div class="span3">'.$this->getOrientation()
        	.'</div><div class="span5"><a href="'.$this->getURL().'" target="_blank">'.$this->getURL()
        	.'</a></div><div class="span3">'.$this->getThumb()
        	.'</div></div>';
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

/*$cat = new Cat(1,"hor");

// print output
$cat->printOut();*/
?>