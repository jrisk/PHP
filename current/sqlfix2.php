<?php

$servername = "localhost";
//$database = "riskbase";
//$username = "riskadmin";
// $password = "Stankonia1990!";
$username = "admin";
$database = "publications";	
$password = "password";

// Create connection

$conn = new mysqli($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
echo "Connected Successfully";

// testing database on local mysql database server
$query = "SELECT * FROM classics";

$result = $conn->query($query);

echo "<html><head><title>Whatever</title></head><body><table border=1><thead><tr>
<th>Authors</th><th>Book Title</th></tr></thead><tbody>";

if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>result is: " . $row["author"] . "</td>";
		echo "<td>book is: " . $row["title"] . "</td>";
		echo "</tr>";
	}
}
	else
	{
		echo "0 results or dun goofed";
}

echo "</tbody></table><h2></h2></body></html>";

// $query = "INSERT INTO weekdata (Monday) VALUES ('Make a Lesson Planner')";

$result = conn->query($query);

echo "query" . $query . "initialized in database";

$conn->close();


?>
	