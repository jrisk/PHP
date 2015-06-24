<?php

// xmlget.php

if (isset($_GET['url']))
{
	header('Content-Type: text/xml');
	echo file_get_contents("http://".sanitizestring($_GET['url']));
	}
	
	
function sanitizestring($var)
{
	$var = strip_tags($var);
	$var = htmlentities($var);
	return stripslashes($var);
	}
	
?>