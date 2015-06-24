<?php
// cookies and authentication

setcookie('user','cookster',time() + 60 * 60 * 24 * 7,'/');
if (isset($_COOKIE['username'])) $username = $_COOKIE['username']; //cant read until browser reloads and sends
//back the cookie

//destory a cookie, set the time negative

// setcookie('username', 'cookster', time()-3000000, '/');
// set a long time incase users computer date and time is wrong

// http authentication

$username = 'admin';
$password = 'pls';

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
if ($_SERVER['PHP_AUTH_USER'] == $username && $_SERVER['PHP_AUTH_PW'] == $password)
echo "Welcome User: " . $_SERVER['PHP_AUTH_USER'] . "Password: " . $_SERVER['PHP_AUTH_PW'];
else
die("Username or Password was entered incorrectly");
}
else
{
header('WWW-Authenticate: Basic realm="Restricted Section"');
header('HTTP/1.0 401 Unauthorized');
die("Please enter your username and password");
}
//$token = hash('ripemd128', 'password')

/*creating a user table
require_once login.php

$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ($connection->error) die(connection->connect_error);

$query = "CREATE TABLE users (firstname VARCHAR(32) NOT NULL,
	lastname VARCHAR(32) NOT NULL,
	username VARCHAR(32) NOT NULL UNIQUE,
	password VARCHAR(32) NOT NULL )";
	
$result = $connection->query($query);
if (!$result) die(connection->error);

$salt1 = "%DLEp$3";
$salt2 = "4DG32(";

$firstname = "Bill";
$lastname = "Gates";
$username = "billyG";
$password = "linuxsux";
$token = hash('ripemd128', "$salt1$password$salt2");

add_user($connection, $firstname, $lastname, $username, $token);

$firstname = "Paula";
$lastname = "Abdul";
$username = "fame";
$password = "the80sbestdecade";
$token = hash('ripemd128', "$salt1$password$salt2");

add_user($connection, $firstname, $lastname, $username, $token);

function add_user($connection, $fn, $ln, $un, $pw)
{
$query = "INSERT INTO users VALUES ('$fn', '$ln', '$un', '$pw')";
$result = $connection->query($query);
if (!$result) die($connection->error);
}

*/



?>


