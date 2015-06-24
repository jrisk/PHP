<?php
//pg 320 html/php/mysql sanitizing

function sanitizestring($var)
{
	$var = stripslashes($var);
	$var = htmlentities($var);
	$var = striptags($var);
	return $var;
	}
	
function sanitizemysql($var)
{ // using mysqli
	$var = $connection->real_escape_string($var);
	$var = sanitizestring($var);
	return $var;
	}
	//for user input
	$var = sanitizestring($_POST['name'])
	//when you have open mysqli connection
	$var = sanitizemysql($connection, $_POST['user input'])