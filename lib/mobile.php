<?php
include_once('Mobile_Detect.php');

//Detect 'mobile' and 'tablet' - I'm going to wait for reports of unsupported devices.
$detect = new Mobile_Detect;
 
// Any mobile device (phones or tablets).
if ( $detect->isMobile() || $detect->isTablet() ) {
	//redirct to a mobile specific page
}
?>