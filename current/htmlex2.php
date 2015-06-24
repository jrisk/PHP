<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html">
<title>My Contact Form</title>
</head>
<link type="text/css" rel="stylesheet" href="style.css">
<body>
	<header class="main"
		<h1>My Contact form</h1>
	</header>
	<section class="main">
<form method="post" action="htmlex2.php">
<?php
	error_reporting(0);
	$name = $_POST["name"];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = 'From: My Contact Form';
	$to = 'admin@riskvb.com';
	$subject = 'What\'s on your mind?';
	
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
	
	if ($_POST['submit']) {
		if (mail ($to, $subject, $body, $from)) {
		echo '<p>Message Successfully Sent</p>';
		} else {
		echo '<p>Oops, something went wrong. Try that again.</p>';
		}
	}
?>

	<label>Your Name:</label>
	<input name="name" placeholder="Goes Here">
	<label>Your Email</label>
	<input name="email" type="email" placeholder="Goes Here">
	<label>Your Message:</label>
	<textarea name="message" placeholder="Goes here"></textarea>
	<input id="submit" name="submit" type="submit" value="Submit">
</form>
</section>
</body>


<?php echo "Hello World!"; 
/*This is a comment
it keeps going until the close comment bar
is typed */ 
// Can also do it this way
echo "<br>";

$mycounter = 1;
$mystring = "Stringy";
$myarray = array("one", "two", "three");
$count = 17;

echo $count;
echo "<br>";

$team = array('John', 'Steve', 'Sue', 'Mary', 'Tom');

echo $team[3];

$username = "Fred Clause";

echo $username;
echo "<br>";

$current_user = $username;
echo $current_user;
echo "<br>";

$oxo = array(array('x', ' ', 'x'),
			array('o', 'o', 'x'),
			array('x', 'o', ' '));

echo $oxo[1][2];

// if ($hour > 12 && $hour < 14) dolunch();

// $ingredientincleaner = $ammonia xor $bleach;

$x = 10;
if ($x++ == 10) echo $x;

$y = 0;
if ($y-- == 0) echo $y;
$msgs = 5;
echo "<br>";
echo "you have " .$msgs. " messages";
$info = 'Preface variables with a $ like this $variable';
$count = 10;
echo "Today, $count people viewed your website";
$note = "She wrote upon it \"Return to sender \".";

echo $note;
$heading = "\nDate\tName\tPayment";
echo $heading;?>

<?php 
$author = "steve balmer";

echo "Developers, Developers Developers, Developers, Developers, Developers, 
Developers, Developers, Developers, Developers

-$author";

$author2 = "Bill Gates";

$text = "Measuring programming progress by lines of code is like measuring aircraft building progress 
by weight

- $author2."; 
echo "<br>";

echo $text;

$author3 = "Brian K.";

echo <<<_END
Debugging is twice as hard writing the code in the first place. Therefore if you are clever enough to
code then you are not clever enough to debug it or some
such thing

-$author3
_END;

$author4 = "Scott adams";

$out = <<<_END
<br>
people believe that if it aint broke dont fix it
engineers believe if it aint broke
it doesnt have enough features yet <br>
-$author4
_END;

echo $out;

$number = 125454 * 65333;
echo substr($number, 3, 1);

define("ROOT_LOCATION", '\xampp\htdocs');

$directory = ROOT_LOCATION;

// $line = __LINE__; doesnt work, cant put constants in heredoc <<< or quotes
// $file = __FILE__; don't assign variable to constant


$declare = "this is line" .__LINE__. "of file " .__FILE__. "in directory location" .$directory. "<br>";

echo $declare;

//function longdate($timestamp)
//{
//$temp = date("l F jS Y", $timestamp);
//return "the date is $temp";
// }
//echo longdate(time());
//echo longdate(time()- 1 * 24 * 60 * 60)

$temp = "The date is ";

echo longdate($temp, time());

function longdate($temptext, $timestamp)
{
return $temptext . date("l, F, jS, Y", $timestamp);
}

//echo $temp . longdate(time());
//function longdate($timestamp)
//{
//return date("l, F, jS, Y", $timestamp);
//}

function test()
{
static $count = 0;
echo $count;
$count++;
}


?>