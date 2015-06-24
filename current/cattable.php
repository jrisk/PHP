<?php
//php/mysql

include_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) die("Couldn't connect to database: " . mysql_error());

mysql_select_db($db_database) or die('unable to get database' . mysql_error());

$query = "CREATE TABLE cats  (id SMALLINT NOT NULL AUTO_INCREMENT, 
family VARCHAR(32) NOT NULL,
name VARCHAR(32) NOT NULL,
age TINYINT NOT NULL,
PRIMARY KEY (id))";

$result = mysql_query($query);

if (!$result) die("Could not query database: " . mysql_error());

?>


