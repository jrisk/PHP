<?php

$database = "publications";
$server = "localhost";
$username = "admin";
$password = "password";

$connection = new mysqli($server, $username, $password, $database);

$pdo = new PDO("mysql:host=$server;dbname=$database", $username, $password);

var_dump(PDO::getAvailableDrivers());

if ($connection->connect_error) {
	die("Connection failed: " . $connection->connect_error);
	}
echo "Connected Successfully";

/* $query = "CREATE TABLE weekdata (
Monday varchar(255),
Tuesday varchar(255),
Wednesday varchar(255),
Thursday varchar(255),
Friday varchar(255),
Saturday varchar(255),
Sunday varchar(255)
)"; */

/*$query = "INSERT INTO weekdata (Monday)
VALUES ('Today we make a lessonplanner from scratch using Javascript, HTML, CSS, PHP, MYSQL, WHATEVER')
"; */

$query = "SELECT * FROM classics";

$result = $connection->query($query);

$rows = $result->num_rows;

for ($i = 0; $i < $rows; $i++) {
	$row = $result->fetch_assoc();
	echo "this is : " . $row["title"] . "<br>";
	echo "this is : " . $row["year"] . "<br>";
	}

echo "<br> '\$rows' = " . $rows . "<br>";

if ($result == TRUE) {
	echo "new query successful";
	}
else
	{
		echo "error: " . $connection->error . "<br>";
		}

echo "the " . $result . " is here";

$connection->close();

?>



