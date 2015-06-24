<?php
// describe cat table
include_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) die("Couldn't connect to database: " . mysql_error());

mysql_select_db($db_database) or die('unable to get database' . mysql_error());

/*
$query = "INSERT INTO cats VALUES (NULL, 'Lion', 'Leo', 4), (NULL, 'Cougar', 'Growler', 2), (NULL, 'Cheetah', 'Charley', 3)";
$result = mysql_query($query);

if (!$result) die("Could not insert values: " . mysql_error());

$query6 = "DELETE FROM cats WHERE name='Charlie'";

$result6 = mysql_query($query6);

if ($result6) echo "dun goofed agen";

$query5 = "DELETE FROM cats WHERE ID='9'";
$result5 = mysql_query($query5);
if (!$result5) echo "ya dun goofed"; 

$query7 = "INSERT INTO cats VALUES (NULL, 'Lynx', 'Leandra', 7)";
$result7 = mysql_query($query7);
echo "The Insert ID was: " . mysql_insert_id();

if (!$result7) echo "goofed";
*/

$query8 = "INSERT INTO cats VALUES (NULL, 'Tiger', 'Sammy', 2)";
$result8 = mysql_query($query8);
$INSERT_ID = mysql_insert_id();

$query75 = "CREATE TABLE owners (id SMALLINT NOT NULL, name VARCHAR(32) NOT NULL, last VARCHAR(32) NOT NULL)";
mysql_query($query75);

$query9 = "INSERT INTO owners VALUES ($INSERT_ID, 'Amy', 'Smith')";
$result9 = mysql_query($query9);



$query4 = "UPDATE cats SET name='Charlie' WHERE name='Charley'";
$result4 = mysql_query($query4);

if (!$result4) die ("you dun goofed");


$query2 = "DESCRIBE cats";

$result2 = mysql_query($query2);

if (!$result2) die("Could not query database: " . mysql_error());

$rows = mysql_num_rows($result2);

echo "<table><tr><th>Column</th><th>Type</th><th>Null</th><th>Key</th></tr>";

for ($j = 0; $j < $rows; ++$j)
{
$row = mysql_fetch_row($result2);
echo "<tr>";
for ($k = 0; $k < 4; ++$k)
echo "<td>$row[$k]</td>";

echo "</tr>";
}
echo "</table>";

$query3 = "SELECT * FROM cats";
$result3 = mysql_query($query3);

$rows3 = mysql_num_rows($result3);

echo "<table><tr> <th>ID</th> <th>Family</th> <th>Name</th> <th>Age</th></tr>";

for ($m = 0; $m < $rows3; ++$m)
{
$row3 = mysql_fetch_row($result3);
echo "<tr>";

for ($n = 0; $n < 4; ++$n)
echo "<td>$row3[$n]</td>";
echo "</tr>";
}

echo "</table>";




?>

