<?php
//program that converts fahrenheit to celcius
require_once 'login.php';

$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ($connection->connect_error) echo "$connection->error";
else
echo "connected to mysql server";

/*$query = "CREATE TABLE testdegree 
	(queryid SMALLINT NOT NULL AUTO_INCREMENT, 
	fahrenheit SMALLINT NOT NULL, 
	celcius SMALLINT NOT NULL, 
	comment VARCHAR(32) NOT NULL,
	PRIMARY KEY (queryid))";
	
$result = $connection->query($query);

if (!$result) die("change could not be made: $connection->error");
*/

$fah = $cel = '';

if (isset($_POST['fah'])) $fah = sanitizestring($_POST['fah']);
if (isset($_POST['cel'])) $cel = sanitizestring($_POST['cel']);

if ($fah != '')
{
$cel = intval((5/9) * ($fah - 32));
$out = "$fah fahrenheit equals $cel celcius";
}
elseif ($cel != '')
{
$fah = intval((9/5) * ($cel + 32));
$out = "$cel celcius equals $fah fahrenheit";
}

else
$out = "";

echo <<<_END
<html>
<head>
	<title>Temperature Converter</title>
</head>
<body>
	<pre>
		ENTER FAHRENHEIT OR CELCIUS AND HAVE IT CONVERTED TO OTHER KIND BY CLICKING CONVERT
	<b>$out</b>
	<form method='post' action='degree.php'>
	FAHRENHEIT <input type='text' name='fah' size='6'>
	CELCIUS <input type='text' name='cel' size='6'>
		<input type='submit' value='CONVERT'>
		
	</form>
	</pre>
</body>
</html>
_END;
function sanitizestring($var)
{
	$var = stripslashes($var);
	$var = htmlentities($var);	
	$var = strip_tags($var);
	return $var;
	}
	
function sanitizemysql($var)
{ // using mysqli
	$var = $connection->real_escape_string($var);
	$var = sanitizestring($var);
	return $var;
	}
	//for user input
	$var = sanitizestring($_POST['name']);
	//when you have open mysqli connection
	$var = sanitizemysql($connection, $_POST['user input']);
	
	
	
	
