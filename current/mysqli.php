<?php
//mysqli

require_once 'login.php';

$connection = new mysqli($db_hostname, $db_username, $db_password);

if ($connection->connect_error) die($connection->connect_error)

$query = "SELECT * FROM classics"
$result = $connection->$query($query)

if (!$result) die($connection->error);

