// query.php
<?php 

require_once 'login.php';
$db_server = (mysql_connect($db_hostname, $db_username, $db_password));

if (!$db_server) die("Unable to connect to mysql: " . mysql_error());

mysql_select_db($db_database) or die("Could not connect to a database: " . mysql_error());

// sending a query to mysql

$query = "SELECT * FROM classics";

$result = mysql_query($query);

if (!$result) die("Could not query database: " . mysql_error());

$rows = mysql_num_rows($result);


/*for ($j = 0; $j < $rows; ++$j)
{
echo "Author: " . mysql_result($result,$j,'author')	. "<br>";
echo "Title: " . mysql_result($result, $j, 'title') . "<br>";
echo "Year: " . mysql_result($result, $j, 'year') . "<br>";
echo "ISBN: " . mysql_result($result, $j, 'isbn') . "<br><br>";
}
*/


for ($k = 0 ; $k < $rows ; ++$k)
{
$row = mysql_fetch_row($result);

echo "Author is " . $row[0] . "<br>";
echo "Title is " . $row[1] . "<br>";
echo "Year is " . $row[2] . "<br>";
echo "ISBN is " . $row[3] . "<br>";
}

mysql_close($db_server);

?>



