<?php
// more php fun

include_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) echo "couldn't connect to mysql";

mysql_select_db($db_database) or die("couldn't connect to database");

$query = "SELECT * FROM customers";
$result = mysql_query($query);

if (!$result) echo "dun goofed: " . mysql_error() . "<br>";

$rows = mysql_num_rows($result);

for ($j = 0; $j < $rows; ++$j)
{
$row = mysql_fetch_row($result);
echo "$row[0] Purchased $row[1]: <br>";

$subquery = "SELECT * FROM classics WHERE isbn='$row[1]'";
$subresult = mysql_query($subquery);

if (!$subresult) die("Couldn't tie customers to classics: " . mysql_error());

$subrow = mysql_fetch_row($subresult);

echo " '$subrow[1]' by $subrow[0]<br>";
}


$user = mysql_entities_fix_string($_POST['user']);
$pass = mysql_entities_fix_string($_POST['pass']);

$query = "SELECT * FROM users WHERE user='user' AND pass='pass'";


function mysql_entities_fix_string($string)
{
return htmlentities(mysql_fix_string($string));
}
function mysql_fix_string($string)
{
if (get_magic_quotes_gpc()) $string = stripslashes($string);
return mysql_real_escape_string($string);
}


?>




