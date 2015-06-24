<?php

//exec.php
$cmd = "dir";

exec(escapeshellcmd($cmd), $output, $status);

if ($status) echo "Cant into command line";
else
{
echo "<pre>";
foreach($output as $line) echo htmlspecialchars("$line\n");
echo "</pre>";
}
?>