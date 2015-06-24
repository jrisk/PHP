<?php
//continue.php

session_start();

if (isset($_SESSION['username']))
{
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];

destroy_session_and_data();

echo "WELCOME BACK $firstname.<br>
	Your full name is $firstname $lastname.<br>
	Your username is '$username'
	Your password is '$password'
	You have entered the matricks!";
	}
else echo "please <a href=authenticate2.php>Please authenticate you credentials by clicking here to log in</a>";

function destroy_session_and_data()
{
$_SESSION = array();
setcookie(session_name(),'',time() - 399999,'/');
session_destroy();
}

?>



	