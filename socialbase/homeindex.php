<?php

require_once 'header.php';

echo "<br><span class='main'>Welcome to $appname,";

if ($loggedin) echo "Hi $user, you are logged in";
else echo " please sign up or log in";
?>

</span><br><br>
</body>
</html>
