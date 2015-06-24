<?php

//creating a user table
require_once 'login.php';

$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ($connection->connect_error) die($connection->connect_error);

$query = "CREATE TABLE users (firstname VARCHAR(32) NOT NULL,
	lastname VARCHAR(32) NOT NULL,
	username VARCHAR(32) NOT NULL UNIQUE,
	password VARCHAR(32) NOT NULL)";
	
$result = $connection->query($query);
if (!$result) die($connection->error);

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

echo "all good"
?>