<?php
/**
 * GiveCat API - Will load an updated array of cat images - meaning you always get fresh cats! :)
 *
 * Default behaviour on visit = error json
 **/

$json = '{error: "Hard Error"}';

if($_GET['callback']) echo ("(".$_GET['callback'].")".$json);
else
	echo($json);

?> 