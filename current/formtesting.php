<?php
//html form
if (isset($_POST['name'])) $name = $_POST['name'];
else $name = "(NOT ENTERED)";
if (isset($_POST['ice'])) 
$ice = $_POST['ice'];
foreach ($ice as $item) echo "you've selected $item<br>";

if (isset($_POST['food'])) 
$food = $_POST['food'];
else ($food = "what food");

echo <<<_END
<html>
<head>
	<title>Form Test</title>
</head>
<body>
Your name is: $name<br>
<form method='post' action='formtesting.php'>
What is your name??
<input type='text' name='name'>
<input type='submit'>
</form>
<form action='formtesting.php' action='post'>
<pre>
Loan Amount <input type='text' name='principle'>
Monthly Repayment <input type='text' name='monthly payment'>
Number of Years <input type='text' name='years' value='25'>
Interest Rate <input type='text' name='interest' value='6'>
<input type='submit'>
</pre>
<form method='post' action='formtesting.php'>
This is a text box form.
<input type='text' name='the_name' size='100px' maxlength='110px' value='hello!'>
<input type='submit'>
<input type='checkbox' name='lecheckbox' value='check this out' checked='checked'>
<textarea name='lename' cols='100px' rows='20px' wrap='soft'>
HELLO THERE
</textarea>
I agree with this.
<input type='checkbox' name='checkem' value='1'>
</form>
<form method='post' action='formtesting.php'>
WHAT IS FAVORIT IZE GREEM?
Vanilla<input type='checkbox' name='ice[]' value='vanilla'>
Chocolate<input type='checkbox' name='ice[]' value='chocolate'>
Strawberry<input type='checkbox' name='ice[]' value='strawberry'>
THIS IS MY FAVORIT ICED CREEM<input type='submit'>
</form>
WHEN YOU AVAILABLE YO
<label>8am-12pm<input type="radio" name='times' value=1></label>
12pm-5pm<input type="radio" name='times' value=2 checked='checked'>
<label>5pm-9pm<input type="radio" name='times' value=3></label>
<form method='post' action='formtesting.php'>
Choose a food:
<select name='food' size='1' multiple='multiple'>
<option value>SPAGHETTI PLS</option>
<option selected='feces'>FECES MMM</option>
<option value='omelette du fromage'>OMELETT DU FROMAGE</option>
</select>
<input type='submit' value='food good'>
<b>you like $food bruh?</b>
<select name='stuff' size='2'>
<option value>choose this drop down crap pls</option>
<input type='image' name='submit' src='image.jpg' width='200' height='400'>
</form>
<form action='formtesting.php' method='post' autocomplete='on'>
<input type='text' name='username'>
<input type='text' name='password' autocomplete='off' required='required'>
<input type='submit' value='PRESS DUH BUTTIN'>
</body>
</html>
_END;









?>