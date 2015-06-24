<?php

//urlpost.php the server side of the ajax call

if (isset($_POST['url']))
{
	echo file_get_contents('http://' . SanitizeString($_POST['url']));
	}
	
function SanitizeString($var)
{
	$var = strip_tags($var);
	$var = htmlentities($var);
	return stripslashes($var);
	}
	
?>
